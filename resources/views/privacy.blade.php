@extends('layouts.app')

@section('title', 'Privacy Policy | Solutions Delivered')
@section('meta_description', 'How Solutions Delivered collects, uses, and protects your personal information.')

@section('content')
<x-page-header eyebrow="Legal" title="Privacy Policy" lead="How we collect, use, and protect your information." />

<section class="mx-auto max-w-3xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    <div class="legal">
        <p><strong>Last updated:</strong> {{ date('j F Y') }}</p>

        <h2>Introduction</h2>
        <p>Solutions Delivered ("we", "our", or "us") is committed to protecting your privacy. This policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>

        <h2>Information we collect</h2>
        <h3>Information you provide</h3>
        <p>When you contact us through our website, we collect:</p>
        <ul>
            <li>Name</li>
            <li>Email address</li>
            <li>Company name (optional)</li>
            <li>Message content</li>
            <li>Any other information you choose to provide</li>
        </ul>

        <h3>Automatically collected information</h3>
        <p>When you visit our website, we may automatically collect certain information about your device and usage, including:</p>
        <ul>
            <li>IP address (anonymised in analytics)</li>
            <li>Browser type and version</li>
            <li>Pages visited and time spent on pages</li>
            <li>Referring website</li>
            <li>Device type and operating system</li>
            <li>Interaction with page elements (clicks, scrolls, form interactions)</li>
            <li>Geographic location (country or region level only)</li>
        </ul>

        <h2>How we use your information</h2>
        <p>We use the information we collect to:</p>
        <ul>
            <li>Respond to your enquiries and provide support</li>
            <li>Communicate with you about our services</li>
            <li>Improve our website and services through analytics</li>
            <li>Understand how visitors use our website to enhance the experience</li>
            <li>Comply with legal obligations</li>
            <li>Protect against fraudulent or illegal activity</li>
        </ul>

        <h2>Legal basis for processing (UK GDPR)</h2>
        <p>We process your personal data based on:</p>
        <ul>
            <li><strong>Consent:</strong> when you submit information through our contact form</li>
            <li><strong>Legitimate interests:</strong> to operate and improve our website and services</li>
            <li><strong>Legal obligation:</strong> to comply with applicable laws and regulations</li>
        </ul>

        <h2>Data retention</h2>
        <p>We retain your personal information only for as long as necessary to fulfil the purposes set out in this policy, unless a longer retention period is required by law. Contact form submissions are typically retained for up to two years unless you request earlier deletion.</p>

        <h2>Information sharing and disclosure</h2>
        <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
        <ul>
            <li><strong>Service providers:</strong> with trusted third parties who help us operate the website and deliver services (for example email and web hosting)</li>
            <li><strong>Legal requirements:</strong> when required by law or to protect our rights</li>
            <li><strong>Business transfers:</strong> in connection with any merger, sale, or acquisition of our business</li>
        </ul>

        <h2>Your rights (UK GDPR)</h2>
        <p>Under UK data protection law, you have the right to access, rectify, erase, restrict processing of, and port your personal data, as well as to object to processing and to withdraw consent at any time. To exercise any of these rights, please contact us using the details below.</p>

        <h2>Cookies and analytics</h2>
        <p>Our website uses cookies for essential functionality and, with your consent, for analytics. Essential cookies are required for the website to work, including session management and security. Analytics cookies help us understand how visitors interact with the site so we can improve it; this data is anonymised and aggregated, and is not used to identify individual visitors. You can decline analytics cookies via our cookie banner, and the decline is as easy as the accept.</p>

        <h2>Data security</h2>
        <p>We implement appropriate technical and organisational measures to protect your personal information. However, no internet transmission is completely secure, and we cannot guarantee absolute security.</p>

        <h2>Children's privacy</h2>
        <p>Our services are not directed to individuals under the age of 18, and we do not knowingly collect personal information from children.</p>

        <h2>Changes to this policy</h2>
        <p>We may update this policy from time to time. We will post the new policy on this page and update the "last updated" date.</p>

        <h2>Contact us</h2>
        <p>If you have questions about this policy or wish to exercise your data protection rights, please contact us:</p>
        <div class="note">
            <p><strong>Solutions Delivered</strong></p>
            <p>Email: <a href="mailto:{{ config('brand.contact.privacy') }}">{{ config('brand.contact.privacy') }}</a></p>
            <p>Alternatively, use our <a href="{{ route('contact') }}">contact form</a>.</p>
        </div>

        <h2>Supervisory authority</h2>
        <p>If you believe we have not addressed your concerns adequately, you have the right to lodge a complaint with the UK Information Commissioner's Office (ICO):</p>
        <div class="note">
            <p><strong>Information Commissioner's Office</strong></p>
            <p>Website: <a href="https://ico.org.uk" rel="noopener">ico.org.uk</a></p>
            <p>Helpline: 0303 123 1113</p>
        </div>
    </div>
</section>
@endsection
