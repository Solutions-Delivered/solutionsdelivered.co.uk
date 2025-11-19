@extends('layouts.app')

@section('title', 'Our Solutions - Solutions Delivered')
@section('meta_description', 'Explore our comprehensive business solutions including Web Development, Service Management, Project Management, and Business Change consulting services.')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Our Solutions",
    "description": "Comprehensive business solutions including web development, service management, project management, and business change consulting.",
    "url": "{{ url()->current() }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "itemListElement": [
        {
            "@type": "Service",
            "name": "Web Development",
            "description": "Bespoke Laravel-based web systems built for accessibility, efficiency, and value. WCAG 2.2 compliant with no-bloat philosophy.",
            "provider": {
                "@type": "Organization",
                "name": "Solutions Delivered"
            },
            "areaServed": "GB",
            "serviceType": "Web Development"
        },
        {
            "@type": "Service",
            "name": "Service Management",
            "description": "Expert guidance in implementing and optimizing ITIL-aligned service management frameworks.",
            "provider": {
                "@type": "Organization",
                "name": "Solutions Delivered"
            },
            "areaServed": "GB",
            "serviceType": "IT Service Management"
        },
        {
            "@type": "Service",
            "name": "Project Management",
            "description": "Professional project management services to ensure successful delivery of your initiatives.",
            "provider": {
                "@type": "Organization",
                "name": "Solutions Delivered"
            },
            "areaServed": "GB",
            "serviceType": "Project Management"
        },
        {
            "@type": "Service",
            "name": "Business Change",
            "description": "Strategic guidance through organizational transformation and business process improvement.",
            "provider": {
                "@type": "Organization",
                "name": "Solutions Delivered"
            },
            "areaServed": "GB",
            "serviceType": "Business Consulting"
        }
    ]
}
</script>
@endpush

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-[#198bd9] to-[#65bd7d] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Solutions</h1>
        <p class="text-xl md:text-2xl max-w-3xl">
            Comprehensive business solutions tailored to your unique needs
        </p>
    </div>
</section>

<!-- Web Development Section -->
<section id="web-development" class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="web-development-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198bd9] text-white rounded-full mb-6" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h2 id="web-development-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Web Development
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    We build bespoke web systems using Laravel that are tailored precisely to your business needs. Unlike off-the-shelf solutions laden with unnecessary features, we create streamlined, efficient systems that do exactly what you need—nothing more, nothing less.
                </p>
                <p class="text-lg text-gray-700 mb-4">
                    Every system we develop is built with WCAG 2.2 compliance at its core, ensuring your digital presence is accessible to all users. We believe accessibility isn't optional—it's essential for modern web applications.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    Our focus on clean code and minimal bloat means your systems run faster, cost less to maintain, and are easier for your team to use. We deliver professional solutions without the enterprise price tag.
                </p>
            </div>
            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">What You Get</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>Laravel-based systems</strong> – Modern, secure, and maintainable</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>WCAG 2.2 compliance</strong> – Accessible to all users by default</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>No-bloat philosophy</strong> – Only the features you actually need</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>Cost-effective solutions</strong> – Professional quality without excessive costs</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>Direct collaboration</strong> – Work directly with the developer</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Service Management Section -->
<section id="service-management" class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="service-management-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198bd9] text-white rounded-full mb-6" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
                <h2 id="service-management-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Service Management
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    Our Service Management solutions focus on optimizing your internal processes to maximize efficiency and effectiveness. We work directly with your teams to understand current workflows and identify opportunities for improvement.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    Through a collaborative approach, we help you design and implement streamlined processes that reduce waste, improve quality, and enhance customer satisfaction.
                </p>
            </div>
            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Key Benefits</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Process optimization and standardization</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Improved operational efficiency</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Enhanced service quality and consistency</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Cost reduction through waste elimination</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Project Management Section -->
<section id="project-management" class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="project-management-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-white rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">What We Deliver</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Comprehensive risk assessment and mitigation</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Detailed project planning and scheduling</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Stakeholder management and communication</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Budget control and resource optimization</span>
                    </li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#65bd7d] text-white rounded-full mb-6" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h2 id="project-management-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Project Management
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    Complex projects require experienced oversight to ensure successful delivery. Our project management services provide the expertise and structure needed to keep your initiatives on track.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    We specialise in risk mitigation, ensuring potential issues are identified early and addressed proactively, helping you deliver on time and within budget.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Business Change Section -->
<section id="business-change" class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="business-change-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198bd9] text-white rounded-full mb-6" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h2 id="business-change-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Business Change
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    Organizational transformation can be challenging, but with the right support, it can also be incredibly rewarding. Our Business Change services provide leadership and guidance throughout your transformation journey.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    We help you navigate change management challenges, engage stakeholders, and build the organizational capabilities needed for long-term success.
                </p>
            </div>
            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Our Approach Includes</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Change impact assessment and planning</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Stakeholder engagement strategies</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Communication and training programs</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#65bd7d] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Leadership coaching and support</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#198bd9] text-white" aria-labelledby="cta-heading">
    <div class="max-w-4xl mx-auto text-center">
        <h2 id="cta-heading" class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Get Started?
        </h2>
        <p class="text-xl mb-8">
            Let's discuss which solution is right for your organisation.
        </p>
        <a href="{{ route('get-started') }}" class="inline-block bg-white text-[#198bd9] hover:bg-gray-100 px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
            Contact Us Today
        </a>
    </div>
</section>
@endsection
