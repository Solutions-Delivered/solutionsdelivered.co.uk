<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormSubmitted;
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

    public function howWeWork()
    {
        return view('how-we-work');
    }

    public function careers()
    {
        return view('careers');
    }

    public function getStarted()
    {
        return view('get-started');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function contact(ContactFormRequest $request)
    {
        $validated = $request->validated();

        // Queue email notification for better performance
        try {
            Mail::to(config('brand.contact.general'))
                ->queue(new ContactFormSubmitted(
                    name: $validated['name'],
                    email: $validated['email'],
                    company: $validated['company'] ?? null,
                    message: $validated['message']
                ));
        } catch (\Exception $e) {
            // Log the error but don't expose it to the user
            \Log::error('Contact form email failed: '.$e->getMessage());

            // Still show success to user (email will be in logs for manual handling)
        }

        return back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
