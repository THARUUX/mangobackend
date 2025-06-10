<?php

namespace App\Http\Controllers;

use App\Models\EmailConfig;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;

class PHPMailerController extends Controller
{
    function submitContactForm(Request $request)
    {

        $mailSettings = EmailConfig::find(1);

        $mail = new PHPMailer();

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $mailSettings->host;
        $mail->SMTPAuth = true;
        $mail->Username = $mailSettings->username;
        $mail->Password = $mailSettings->password;
        $mail->SMTPSecure = $mailSettings->smtp_secure;
        $mail->Port = $mailSettings->port;

        $mail->setFrom($mailSettings->sender_email, $mailSettings->sender_name);
        $mail->addAddress($mailSettings->sender_email);
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body = '<p>First Name: ' . $request->fname . '</p>' .
            '<p>Last Name: ' . $request->lname . '</p>' .
            '<p>Email: ' . $request->email . '</p>' .
            '<p>Phone: ' . $request->phone . '</p>' .
            '<p>Company: ' . $request->company . '</p>' .
            '<p>Address: ' . $request->address . '</p>' .
            '<p>Message: ' . $request->message . '</p>';
        if ($mail->send()) {
            return redirect()->back()->with('success', 'Message sent successfully.');
        } else {
            return redirect()->back()->with('success', 'Message could not be sent. Error: ' . $mail->ErrorInfo);
        }
    }

    function sendMail(Request $request)
    {
        $mailSettings = EmailConfig::find(1);

        $mail = new PHPMailer();

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $mailSettings->host;
        $mail->SMTPAuth = true;
        $mail->Username = $mailSettings->username;
        $mail->Password = $mailSettings->password;
        $mail->SMTPSecure = $mailSettings->smtp_secure;
        $mail->Port = $mailSettings->port;

        $mail->setFrom($mailSettings->sender_email, $mailSettings->sender_name);
        $mail->addAddress($mailSettings->sender_email);
        $mail->isHTML(true);
        $mail->Subject = $request->admin_subject;
        $mail->Body = $request->admin_body;

        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->addAddress($request->email);
            $mail->isHTML(true);
            $mail->Subject =  $request->client_subject;

            $mail->Body = $request->client_body;

            if ($mail->send()) {
                return true;
            } else {
                Log::error('Error sending client email: ' . $mail->ErrorInfo);
                return false;
            }
        } else {
            Log::error('Error sending admin email: ' . $mail->ErrorInfo);
            return false;
        }
    }
}
