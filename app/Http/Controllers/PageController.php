<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function solutions()
    {
        return view('solutions');
    }

    public function careers()
    {
        return view('careers');
    }

    public function getStarted()
    {
        return view('get-started');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Here you would typically send an email or store the contact request
        // For now, we'll just return a success response

        return back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
