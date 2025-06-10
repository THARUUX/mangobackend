<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Event\Runtime\PHP;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $content = view('frontend.emails.admin.subscribe', ['title' => 'Subscribe Form Submission', 'email' => $request->email])->render();

        $admin_subject = 'Subscribe Form Submission';
        $admin_body = view('frontend.emails.layout.base', ['content' => $content])->render();

        $content = view('frontend.emails.client.subscribe', ['title' => 'Thanks for Subscribing'])->render();

        $client_subject = 'Thank you for subscribing';
        $client_body = view('frontend.emails.layout.base', ['content' => $content])->render();

        $request->merge([
            'admin_subject' => $admin_subject,
            'admin_body' => $admin_body,
            'client_subject' => $client_subject,
            'client_body' => $client_body,
        ]);

        $controller = new PHPMailerController();

        if ($controller->sendMail($request)) {
            return redirect()->back()->with('success', 'Thank you for subscribing');
        } else {
            return redirect()->back()->with('error', 'Try again later');
        }
    }
}
