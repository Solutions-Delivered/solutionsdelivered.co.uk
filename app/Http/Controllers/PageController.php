<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormSubmitted;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function aiFoundations(): View
    {
        return view('ai-foundations');
    }

    public function foundationsOs(): View
    {
        return view('foundations-os');
    }

    public function howItWorks(): View
    {
        return view('how-it-works');
    }

    public function consultancy(): View
    {
        return view('consultancy', [
            'packages' => config('packages'),
        ]);
    }

    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function privacy(): View
    {
        return view('privacy');
    }

    public function terms(): View
    {
        return view('terms');
    }

    public function submitContact(ContactFormRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $packageName = isset($validated['package'])
            ? config("packages.{$validated['package']}.name")
            : null;

        try {
            Mail::to(config('brand.contact.general'))
                ->send(new ContactFormSubmitted(
                    name: $validated['name'],
                    email: $validated['email'],
                    company: $validated['company'] ?? null,
                    message: $validated['message'],
                    packageName: $packageName
                ));
        } catch (\Exception $e) {
            Log::error('Contact form email failed: '.$e->getMessage());
        }

        return back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
