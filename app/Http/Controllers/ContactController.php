<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Uncomment and customize if you plan to send an email
// use Illuminate\Support\Facades\Mail;
// use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Show the contact form
    public function show()
    {
        return view('contact');
    }

    // Process the contact form submission
    public function send(Request $request)
    {
        // Validate form data
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Process the data (send email, store in DB, etc.)
        // For example, to send an email:
        // Mail::to('contact@f1academyblog.com')->send(new ContactMail($request->all()));

        return redirect()->back()->with('message', 'Your message has been sent!');
    }
}
