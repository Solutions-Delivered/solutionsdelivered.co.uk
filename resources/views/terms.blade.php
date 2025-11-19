@extends('layouts.app')

@section('title', 'Terms of Service - Solutions Delivered')
@section('meta_description', 'Terms of Service for Solutions Delivered - The terms and conditions governing the use of our website and services.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-[#198fd9] to-[#D65FCB] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Terms of Service</h1>
        <p class="text-xl md:text-2xl max-w-3xl">
            Terms and conditions for using our website and services
        </p>
    </div>
</section>

<!-- Terms Content -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-4xl mx-auto prose prose-lg">
        <p class="text-gray-600 mb-8"><strong>Last Updated:</strong> {{ date('F d, Y') }}</p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">1. Acceptance of Terms</h2>
        <p class="text-gray-700 mb-4">
            By accessing and using the Solutions Delivered website (solutionsdelivered.co.uk) and services, you accept and agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our website or services.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">2. Description of Services</h2>
        <p class="text-gray-700 mb-4">
            Solutions Delivered provides business consulting services, including:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>Bespoke web development using Laravel</li>
            <li>Service management consulting</li>
            <li>Project management services</li>
            <li>Business change management support</li>
        </ul>
        <p class="text-gray-700 mb-4">
            Specific service terms will be outlined in individual engagement agreements.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">3. Use of Website</h2>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Acceptable Use</h3>
        <p class="text-gray-700 mb-4">
            You agree to use our website only for lawful purposes and in a way that does not infringe the rights of, restrict, or inhibit anyone else's use of the website. Prohibited behaviour includes:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>Attempting to gain unauthorised access to our systems</li>
            <li>Transmitting malicious code or viruses</li>
            <li>Collecting or harvesting personal data</li>
            <li>Using the website to send spam or unsolicited communications</li>
            <li>Impersonating any person or entity</li>
        </ul>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Intellectual Property</h3>
        <p class="text-gray-700 mb-4">
            All content on this website, including text, graphics, logos, and code, is the property of Solutions Delivered and protected by UK and international intellectual property laws. You may not reproduce, distribute, or create derivative works without express written permission.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">4. Service Engagement Terms</h2>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Proposals and Contracts</h3>
        <p class="text-gray-700 mb-4">
            All service engagements are subject to a written agreement that outlines scope, deliverables, timeline, and fees. These terms supplement but do not replace individual engagement agreements.
        </p>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Payment Terms</h3>
        <p class="text-gray-700 mb-4">
            Unless otherwise agreed in writing:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>Invoices are payable within 30 days of issue</li>
            <li>Late payments may incur interest at the Bank of England base rate plus 8%</li>
            <li>We reserve the right to suspend services for non-payment</li>
        </ul>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Cancellation and Refunds</h3>
        <p class="text-gray-700 mb-4">
            Cancellation and refund terms will be specified in individual engagement agreements. Generally:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>Either party may terminate an engagement with written notice as specified in the agreement</li>
            <li>Fees for work completed up to the termination date remain payable</li>
            <li>Deposits are non-refundable unless otherwise stated</li>
        </ul>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">5. Warranties and Disclaimers</h2>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Website Disclaimer</h3>
        <p class="text-gray-700 mb-4">
            This website and its content are provided "as is" without any warranties, express or implied. We do not warrant that:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>The website will be available continuously or error-free</li>
            <li>Defects will be corrected</li>
            <li>The website is free from viruses or other harmful components</li>
        </ul>

        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Service Warranties</h3>
        <p class="text-gray-700 mb-4">
            We warrant that services will be performed with reasonable care and skill in accordance with industry standards. Specific warranties for development work and other services will be outlined in individual agreements.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">6. Limitation of Liability</h2>
        <p class="text-gray-700 mb-4">
            To the fullest extent permitted by law:
        </p>
        <ul class="list-disc pl-6 mb-4 text-gray-700 space-y-2">
            <li>We shall not be liable for any indirect, consequential, or incidental damages</li>
            <li>Our total liability for any claim shall not exceed the fees paid for the specific service in question</li>
            <li>Nothing in these terms excludes liability for death or personal injury caused by negligence, fraud, or fraudulent misrepresentation</li>
        </ul>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">7. Confidentiality</h2>
        <p class="text-gray-700 mb-4">
            Both parties agree to keep confidential any proprietary or sensitive information shared during an engagement. This obligation survives termination of services.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">8. Data Protection</h2>
        <p class="text-gray-700 mb-4">
            We process personal data in accordance with UK GDPR and our <a href="{{ route('privacy') }}" class="text-[#198fd9] hover:text-[#D65FCB]">Privacy Policy</a>. For client engagements, data processing terms will be specified in separate Data Processing Agreements as required.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">9. Indemnification</h2>
        <p class="text-gray-700 mb-4">
            You agree to indemnify and hold harmless Solutions Delivered from any claims, damages, or expenses arising from your use of our website or services in violation of these terms.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">10. Third-Party Links</h2>
        <p class="text-gray-700 mb-4">
            Our website may contain links to third-party websites. We are not responsible for the content, terms, or privacy practices of external sites.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">11. Changes to Terms</h2>
        <p class="text-gray-700 mb-4">
            We reserve the right to modify these Terms of Service at any time. Changes will be effective immediately upon posting to this page. Your continued use of the website after changes constitutes acceptance of the modified terms.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">12. Governing Law</h2>
        <p class="text-gray-700 mb-4">
            These terms are governed by the laws of England and Wales. Any disputes shall be subject to the exclusive jurisdiction of the courts of England and Wales.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">13. Severability</h2>
        <p class="text-gray-700 mb-4">
            If any provision of these terms is found to be unenforceable, the remaining provisions shall remain in full force and effect.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">14. Entire Agreement</h2>
        <p class="text-gray-700 mb-4">
            These Terms of Service, together with our Privacy Policy and any individual service agreements, constitute the entire agreement between you and Solutions Delivered regarding use of our website and services.
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">15. Contact Information</h2>
        <p class="text-gray-700 mb-4">
            For questions about these Terms of Service, please contact us:
        </p>
        <div class="bg-gray-50 rounded-lg p-6">
            <p class="text-gray-900 font-medium mb-2">Solutions Delivered</p>
            <p class="text-gray-700">
                Email: <a href="mailto:info@solutionsdelivered.co.uk" class="text-[#198fd9] hover:text-[#D65FCB]">info@solutionsdelivered.co.uk</a>
            </p>
            <p class="text-gray-700 mt-2">
                Or use our <a href="{{ route('get-started') }}" class="text-[#198fd9] hover:text-[#D65FCB]">contact form</a>.
            </p>
        </div>
    </div>
</section>
@endsection
