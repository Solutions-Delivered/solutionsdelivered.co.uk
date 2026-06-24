@extends('layouts.app')

@section('title', 'Terms of Service | Solutions Delivered')
@section('meta_description', 'The terms and conditions governing the use of the Solutions Delivered website and services.')

@section('content')
<x-page-header eyebrow="Legal" title="Terms of Service" lead="The terms and conditions for using our website and services." />

<section class="mx-auto max-w-3xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    <div class="legal">
        <p><strong>Last updated:</strong> {{ date('j F Y') }}</p>

        <h2>1. Acceptance of terms</h2>
        <p>By accessing and using the Solutions Delivered website (solutionsdelivered.co.uk) and services, you accept and agree to be bound by these Terms of Service. If you do not agree, please do not use our website or services.</p>

        <h2>2. Description of services</h2>
        <p>Solutions Delivered provides AI adoption support and business and IT consulting services, including:</p>
        <ul>
            <li>Practical AI adoption and AI workspace setup</li>
            <li>Bespoke web and software development</li>
            <li>Service management consulting</li>
            <li>Project management services</li>
            <li>Business change management support</li>
        </ul>
        <p>Specific service terms are set out in individual engagement agreements.</p>

        <h2>3. Use of website</h2>
        <h3>Acceptable use</h3>
        <p>You agree to use our website only for lawful purposes and in a way that does not infringe the rights of, restrict, or inhibit anyone else's use of the website. Prohibited behaviour includes:</p>
        <ul>
            <li>Attempting to gain unauthorised access to our systems</li>
            <li>Transmitting malicious code or viruses</li>
            <li>Collecting or harvesting personal data</li>
            <li>Using the website to send spam or unsolicited communications</li>
            <li>Impersonating any person or entity</li>
        </ul>

        <h3>Intellectual property</h3>
        <p>All content on this website, including text, graphics, logos, and code, is the property of Solutions Delivered and protected by UK and international intellectual property laws. You may not reproduce, distribute, or create derivative works without express written permission.</p>

        <h2>4. Service engagement terms</h2>
        <h3>Proposals and contracts</h3>
        <p>All service engagements are subject to a written agreement that outlines scope, deliverables, timeline, and fees. These terms supplement but do not replace individual engagement agreements.</p>

        <h3>Payment terms</h3>
        <p>Unless otherwise agreed in writing:</p>
        <ul>
            <li>Invoices are payable within 30 days of issue</li>
            <li>Late payments may incur interest at the Bank of England base rate plus 8%</li>
            <li>We reserve the right to suspend services for non-payment</li>
        </ul>
        <p>Prices are quoted exclusive of VAT unless stated otherwise.</p>

        <h3>Cancellation and refunds</h3>
        <p>Cancellation and refund terms are specified in individual engagement agreements. Generally, either party may terminate with written notice as specified in the agreement, fees for work completed up to the termination date remain payable, and deposits are non-refundable unless otherwise stated.</p>

        <h2>5. Warranties and disclaimers</h2>
        <h3>Website disclaimer</h3>
        <p>This website and its content are provided "as is" without any warranties, express or implied. We do not warrant that the website will be available continuously or error-free, that defects will be corrected, or that it is free from harmful components.</p>

        <h3>Service warranties</h3>
        <p>We warrant that services will be performed with reasonable care and skill in accordance with industry standards. Specific warranties for development and other work are set out in individual agreements.</p>

        <h2>6. Limitation of liability</h2>
        <p>To the fullest extent permitted by law:</p>
        <ul>
            <li>We shall not be liable for any indirect, consequential, or incidental damages</li>
            <li>Our total liability for any claim shall not exceed the fees paid for the specific service in question</li>
            <li>Nothing in these terms excludes liability for death or personal injury caused by negligence, fraud, or fraudulent misrepresentation</li>
        </ul>

        <h2>7. Confidentiality</h2>
        <p>Both parties agree to keep confidential any proprietary or sensitive information shared during an engagement. This obligation survives termination of services.</p>

        <h2>8. Data protection</h2>
        <p>We process personal data in accordance with UK GDPR and our <a href="{{ route('privacy') }}">Privacy Policy</a>. For client engagements, data processing terms are specified in separate Data Processing Agreements as required.</p>

        <h2>9. Indemnification</h2>
        <p>You agree to indemnify and hold harmless Solutions Delivered from any claims, damages, or expenses arising from your use of our website or services in violation of these terms.</p>

        <h2>10. Third-party links</h2>
        <p>Our website may contain links to third-party websites. We are not responsible for the content, terms, or privacy practices of external sites.</p>

        <h2>11. Changes to terms</h2>
        <p>We reserve the right to modify these terms at any time. Changes are effective immediately upon posting to this page. Your continued use of the website after changes constitutes acceptance of the modified terms.</p>

        <h2>12. Governing law</h2>
        <p>These terms are governed by the laws of England and Wales. Any disputes are subject to the exclusive jurisdiction of the courts of England and Wales.</p>

        <h2>13. Severability</h2>
        <p>If any provision of these terms is found to be unenforceable, the remaining provisions remain in full force and effect.</p>

        <h2>14. Entire agreement</h2>
        <p>These terms, together with our Privacy Policy and any individual service agreements, constitute the entire agreement between you and Solutions Delivered regarding use of our website and services.</p>

        <h2>15. Contact</h2>
        <p>For questions about these terms, please contact us:</p>
        <div class="note">
            <p><strong>{{ config('brand.company.legal_name') }}</strong></p>
            <p>Registered in England and Wales, Company No. {{ config('brand.company.company_number') }}. VAT No. {{ config('brand.company.vat_number') }}.</p>
            <p>Email: <a href="mailto:{{ config('brand.contact.general') }}">{{ config('brand.contact.general') }}</a></p>
            <p>Or use our <a href="{{ route('contact') }}">contact form</a>.</p>
        </div>
    </div>
</section>
@endsection
