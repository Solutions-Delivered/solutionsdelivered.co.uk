<!-- Footer -->
<footer class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white mt-20" role="contentinfo">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#198fd9] opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-[#0f6ba8] opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-[#198fd9] to-[#0f6ba8] opacity-[0.02] rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Top border accent -->
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#198fd9] to-transparent opacity-50"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <!-- Company Info -->
            <div>
                <div class="flex items-center mb-4">
                    <img src="{{ asset('favicon.svg') }}" class="h-8 w-8 mr-3 opacity-90" aria-hidden="true">
                    <h2 class="text-xl font-bold text-white">Solutions Delivered</h2>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-4">
                    Delivering tailored business solutions for process design, project management, and organizational change.
                </p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                    </svg>
                    <span>UK-Based IT Consultancy</span>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h2 class="text-lg font-bold text-white mb-6 flex items-center">
                    <span class="w-8 h-0.5 bg-gradient-to-r from-[#198fd9] to-transparent mr-3"></span>
                    Quick Links
                </h2>
                <nav aria-label="Footer navigation">
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('solutions') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                Solutions
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('how-we-work') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                How We Work
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('careers') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                Careers
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('get-started') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                Get Started
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="text-lg font-bold text-white mb-6 flex items-center">
                    <span class="w-8 h-0.5 bg-gradient-to-r from-[#198fd9] to-transparent mr-3"></span>
                    Get in Touch
                </h2>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Ready to transform your business? Let's discuss how we can help you achieve your goals.
                </p>
                <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-6 py-3 rounded-lg text-sm font-medium transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <span class="relative z-10">Contact Us</span>
                    <svg class="relative z-10 ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                    <div class="absolute inset-0 bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] rounded-lg opacity-0 group-hover:opacity-20 blur-xl transition-opacity"></div>
                </a>
            </div>
        </div>

        <!-- Bottom section -->
        <div class="relative border-t border-gray-700/50 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-center md:text-left">
                    <p class="text-gray-500 text-sm">
                        &copy; {{ date('Y') }} Solutions Delivered Limited. All rights reserved.
                    </p>
                    <p class="text-gray-600 text-xs mt-1">
                        Registered in England and Wales • Company No. 12063264
                    </p>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('privacy') }}" class="text-gray-500 hover:text-white text-sm transition-colors duration-200 relative group">
                        Privacy Policy
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#198fd9] group-hover:w-full transition-all duration-200"></span>
                    </a>
                    <span class="text-gray-700" aria-hidden="true">|</span>
                    <a href="{{ route('terms') }}" class="text-gray-500 hover:text-white text-sm transition-colors duration-200 relative group">
                        Terms of Service
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#198fd9] group-hover:w-full transition-all duration-200"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
