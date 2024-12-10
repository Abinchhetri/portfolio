<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send the email
        Mail::send('contact_email', ['name' => $request->name, 'email' => $request->email, 'message' => $request->message], function($message) use ($request) {
            $message->to('chhetriabu632@gmail.com')->subject('Contact Form Submission');
            $message->from($request->email);
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
