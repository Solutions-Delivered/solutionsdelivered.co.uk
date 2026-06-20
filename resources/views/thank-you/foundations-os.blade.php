@extends('layouts.app')

@section('title', 'Thank you | The Foundations OS | Solutions Delivered')
@section('meta_description', 'Your Foundations OS purchase is confirmed. Here is how to get set up.')
@section('robots', 'noindex, nofollow')

@section('content')
<x-page-header
    eyebrow="The Foundations OS"
    title="Thank you — your workspace is ready"
    lead="Your purchase is confirmed. Here is how to get set up so your AI opens already knowing your business." />

<section class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8">
    <x-thank-you.status :confirmation="$confirmation" />

    @if ($confirmation->isVerified())
        <div class="mt-12">
            <x-section-heading eyebrow="Getting started">
                Set up in three steps
            </x-section-heading>

            <div class="mt-8">
                <x-process-step :number="1" title="Download your workspace">
                    Your Foundations OS download is in the order confirmation email from Polar.
                    Open the link to grab the zip — and you can re-access it any time from the
                    customer portal link in that same email.
                    <div class="mt-4">
                        <x-button href="mailto:{{ config('brand.contact.general') }}">
                            Download not arrived? Email us
                        </x-button>
                    </div>
                </x-process-step>

                <x-process-step :number="2" title="Point your AI at it">
                    Unzip it and open the folder in Claude (or your assistant of choice), then follow
                    the short prompts. You will spend 20 to 40 minutes telling it how your business
                    works — your voice, your customers, your offers.
                </x-process-step>

                <x-process-step :number="3" title="Work from a head start">
                    From then on, every new chat opens already knowing your business. No re-explaining,
                    no copy-pasting context. Just ask and go.
                </x-process-step>
            </div>

            <div class="mt-10 rounded-md border border-border bg-surface p-6 text-sm leading-relaxed text-muted">
                Stuck, or want a hand getting set up? Email
                <a class="text-blue hover:text-blue-deep" href="mailto:{{ config('brand.contact.general') }}">{{ config('brand.contact.general') }}</a>
                and we will reply within {{ config('brand.contact.response_time') }}.
            </div>
        </div>
    @endif
</section>
@endsection
