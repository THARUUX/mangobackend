<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submitContactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|max_digits:10|min_digits:10',
            'company' => 'required',
            'address' => 'required',
            'message' => 'required',
        ], [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'The phone field is required.',
            'phone.numeric' => 'Please enter a valid phone number.',
            'phone.max_digits' => 'Please enter a valid phone number.',
            'phone.min_digits' => 'Please enter a valid phone number.',
            'company.required' => 'The company field is required.',
            'address.required' => 'The address field is required.',
            'message.required' => 'The message field is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }

        $adminData = [
            'title' => 'Contact Form Submission',
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'address' => $request->address,
            'message' => $request->message
        ];

        $content = view('frontend.emails.admin.contact', $adminData)->render();

        $admin_subject = $request->company . ' - X-GUARD Security Service Inquiry';
        $admin_body = view('frontend.emails.layout.base', ['content' => $content])->render();

        $content = view('frontend.emails.client.contact', ['title' => 'Thanks for Contacting Us', 'name' => $request->fname . ' ' . $request->lname])->render();

        $client_subject = 'Thank you for contacting us';
        $client_body = view('frontend.emails.layout.base', ['content' => $content])->render();

        $request->merge([
            'admin_subject' => $admin_subject,
            'admin_body' => $admin_body,
            'client_subject' => $client_subject,
            'client_body' => $client_body,
        ]);

        $controller = new PHPMailerController();

        if ($controller->sendMail($request)) {
            return redirect()->back()->with('success', 'Our team will review your inquiry and respond as soon as possible');
        } else {
            return redirect()->back()->with('error', 'Try again later');
        }
    }
}
