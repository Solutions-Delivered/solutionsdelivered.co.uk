@extends('layouts.app')

@section('title', 'Careers - Solutions Delivered')
@section('meta_description', 'Join our team of experienced consultants and help deliver tailored business solutions to organizations across the UK.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-[#198fd9] to-[#65bd7d] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Careers at Solutions Delivered</h1>
        <p class="text-xl md:text-2xl max-w-3xl">
            Join our team and make a real impact on businesses across the UK
        </p>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="why-join-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="why-join-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            Why Join Solutions Delivered?
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-lg p-8 shadow-md">
                <div class="text-[#198fd9] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Challenging Work</h3>
                <p class="text-gray-700">
                    Work on diverse projects across multiple industries, solving complex business challenges every day.
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 shadow-md">
                <div class="text-[#65bd7d] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Continuous Learning</h3>
                <p class="text-gray-700">
                    Access to training, certifications, and professional development opportunities to grow your skills.
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 shadow-md">
                <div class="text-[#198fd9] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Collaborative Culture</h3>
                <p class="text-gray-700">
                    Work with a talented team of professionals who value collaboration and knowledge sharing.
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 shadow-md">
                <div class="text-[#65bd7d] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Meaningful Impact</h3>
                <p class="text-gray-700">
                    See the direct impact of your work as you help organizations transform and succeed.
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 shadow-md">
                <div class="text-[#198fd9] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Work-Life Balance</h3>
                <p class="text-gray-700">
                    Flexible working arrangements and a culture that respects personal time and well-being.
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 shadow-md">
                <div class="text-[#65bd7d] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Career Growth</h3>
                <p class="text-gray-700">
                    Clear career progression paths with opportunities to advance and take on leadership roles.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What We Look For Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="looking-for-heading">
    <div class="max-w-4xl mx-auto">
        <h2 id="looking-for-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            What We Look For
        </h2>

        <div class="space-y-6">
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Experience and Expertise</h3>
                <p class="text-gray-700">
                    We seek professionals with proven experience in service management, project management, or business change, with a track record of delivering results.
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Problem-Solving Skills</h3>
                <p class="text-gray-700">
                    Strong analytical and critical thinking abilities to tackle complex business challenges creatively and effectively.
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Communication Excellence</h3>
                <p class="text-gray-700">
                    Excellent written and verbal communication skills to engage with clients and stakeholders at all levels.
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Collaborative Mindset</h3>
                <p class="text-gray-700">
                    A team player who values collaboration, knowledge sharing, and building strong relationships with colleagues and clients.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Current Opportunities Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="opportunities-heading">
    <div class="max-w-4xl mx-auto text-center">
        <h2 id="opportunities-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Current Opportunities
        </h2>
        <p class="text-lg text-gray-700 mb-8">
            We're always looking for talented individuals to join our team. Even if we don't have an open position that matches your skills right now, we'd love to hear from you.
        </p>
        <a href="{{ route('get-started') }}" class="inline-block bg-[#198fd9] text-white hover:bg-[#65bd7d] px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
            Get in Touch
        </a>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#198fd9] text-white" aria-labelledby="cta-heading">
    <div class="max-w-4xl mx-auto text-center">
        <h2 id="cta-heading" class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Make a Difference?
        </h2>
        <p class="text-xl mb-8">
            Start your journey with Solutions Delivered today.
        </p>
        <a href="{{ route('get-started') }}" class="inline-block bg-white text-[#198fd9] hover:bg-gray-100 px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
            Contact Us
        </a>
    </div>
</section>
@endsection
