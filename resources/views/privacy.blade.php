@extends('layouts.app')

@section('title', 'Privacy Policy - Solutions Delivered')
@section('meta_description', 'Privacy Policy for Solutions Delivered - How we collect, use, and protect your personal information.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-[#198bd9] to-[#65bd7d] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Privacy Policy</h1>
        <p class="text-xl md:text-2xl max-w-3xl">
            How we collect, use, and protect your information
        </p>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-4xl mx-auto prose prose-lg">
        <p class="text-gray-600 mb-8"><strong>Last Updated:</strong> {{ date('F d, Y') }}</p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Introduction</h2>
        <p class="text-gray-700 mb-4">
            Solutions Delivered ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Information We Collect</h2>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Information You Provide</h3>
        <p class="text-gray-700 mb-4">
            When you contact us through our website, we collect:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>Name</li>
            <li>Email address</li>
            <li>Company name (optional)</li>
            <li>Message content</li>
            <li>Any other information you choose to provide</li>
        </ul>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Automatically Collected Information</h3>
        <p class="text-gray-700 mb-4">
            When you visit our website, we may automatically collect certain information about your device, including:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>IP address</li>
            <li>Browser type and version</li>
            <li>Pages visited and time spent on pages</li>
            <li>Referring website</li>
            <li>Device type and operating system</li>
        </ul>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">How We Use Your Information</h2>
        <p class="text-gray-700 mb-4">
            We use the information we collect to:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>Respond to your inquiries and provide customer support</li>
            <li>Communicate with you about our services</li>
            <li>Improve our website and services</li>
            <li>Comply with legal obligations</li>
            <li>Protect against fraudulent or illegal activity</li>
        </ul>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Legal Basis for Processing (UK GDPR)</h2>
        <p class="text-gray-700 mb-4">
            We process your personal data based on:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li><strong>Consent:</strong> When you submit information through our contact form</li>
            <li><strong>Legitimate Interests:</strong> To operate and improve our website and services</li>
            <li><strong>Legal Obligation:</strong> To comply with applicable laws and regulations</li>
        </ul>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Data Retention</h2>
        <p class="text-gray-700 mb-4">
            We retain your personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required by law. Contact form submissions are typically retained for up to 2 years unless you request earlier deletion.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Information Sharing and Disclosure</h2>
        <p class="text-gray-700 mb-4">
            We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li><strong>Service Providers:</strong> With trusted third-party service providers who assist in operating our website and delivering services (e.g., email hosting, web hosting)</li>
            <li><strong>Legal Requirements:</strong> When required by law or to protect our rights</li>
            <li><strong>Business Transfers:</strong> In connection with any merger, sale, or acquisition of our business</li>
        </ul>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Your Rights (UK GDPR)</h2>
        <p class="text-gray-700 mb-4">
            Under UK data protection law, you have the following rights:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li><strong>Right to Access:</strong> Request a copy of your personal data</li>
            <li><strong>Right to Rectification:</strong> Request correction of inaccurate data</li>
            <li><strong>Right to Erasure:</strong> Request deletion of your personal data</li>
            <li><strong>Right to Restrict Processing:</strong> Request limitation of how we use your data</li>
            <li><strong>Right to Data Portability:</strong> Request transfer of your data to another service</li>
            <li><strong>Right to Object:</strong> Object to processing of your personal data</li>
            <li><strong>Right to Withdraw Consent:</strong> Withdraw consent at any time</li>
        </ul>
        <p class="text-gray-700 mb-4">
            To exercise any of these rights, please contact us using the details at the end of this policy.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Cookies</h2>
        <p class="text-gray-700 mb-4">
            Our website uses minimal cookies necessary for basic functionality. We do not use tracking cookies or third-party analytics cookies. Any cookies we do use are essential for the website to function properly.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Data Security</h2>
        <p class="text-gray-700 mb-4">
            We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no internet transmission is completely secure, and we cannot guarantee absolute security.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Third-Party Links</h2>
        <p class="text-gray-700 mb-4">
            Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Children's Privacy</h2>
        <p class="text-gray-700 mb-4">
            Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Changes to This Policy</h2>
        <p class="text-gray-700 mb-4">
            We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last Updated" date.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Contact Us</h2>
        <p class="text-gray-700 mb-4">
            If you have questions about this Privacy Policy or wish to exercise your data protection rights, please contact us:
        </p>
        <div class="bg-gray-50 rounded-lg p-6">
            <p class="text-gray-900 font-medium mb-2">Solutions Delivered</p>
            <p class="text-gray-700">
                Email: <a href="mailto:privacy@solutionsdelivered.co.uk" class="text-[#198bd9] hover:text-[#65bd7d]">privacy@solutionsdelivered.co.uk</a>
            </p>
            <p class="text-gray-700 mt-2">
                Alternatively, use our <a href="{{ route('get-started') }}" class="text-[#198bd9] hover:text-[#65bd7d]">contact form</a>.
            </p>
        </div>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Supervisory Authority</h2>
        <p class="text-gray-700 mb-4">
            If you believe we have not addressed your concerns adequately, you have the right to lodge a complaint with the UK Information Commissioner's Office (ICO):
        </p>
        <div class="bg-gray-50 rounded-lg p-6">
            <p class="text-gray-900 font-medium mb-2">Information Commissioner's Office</p>
            <p class="text-gray-700">Website: <a href="https://ico.org.uk" target="_blank" rel="noopener noreferrer" class="text-[#198bd9] hover:text-[#65bd7d]">ico.org.uk</a></p>
            <p class="text-gray-700">Helpline: 0303 123 1113</p>
        </div>
    </div>
</section>
@endsection
