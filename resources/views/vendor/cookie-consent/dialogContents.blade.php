<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-4 px-4 sm:px-6 lg:px-8 z-[9999]" role="dialog" aria-live="polite" aria-label="Cookie consent" aria-describedby="cookie-consent-text">
    <div class="max-w-7xl mx-auto">
        <div class="relative bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] rounded-xl shadow-2xl border border-white/20 p-6">
            <!-- Decorative background -->
            <div class="absolute inset-0 bg-white/5 rounded-xl" aria-hidden="true"></div>

            <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <!-- Icon and message -->
                <div class="flex items-start gap-3 flex-1">
                    <!-- Cookie icon -->
                    <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-full flex items-center justify-center" aria-hidden="true">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>

                    <!-- Message -->
                    <div class="flex-1">
                        <p id="cookie-consent-text" class="text-white text-sm sm:text-base leading-relaxed cookie-consent__message">
                            {!! trans('cookie-consent::texts.message') !!}
                        </p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex items-center gap-3 w-full sm:w-auto sm:flex-shrink-0">
                    <button
                        type="button"
                        class="js-cookie-consent-decline cookie-consent__decline inline-flex items-center justify-center px-6 py-3 bg-white/20 text-white border-2 border-white rounded-lg font-semibold text-sm hover:bg-white/30 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-white/50 active:scale-95 w-full sm:w-auto"
                        aria-label="Decline cookies"
                    >
                        Decline
                    </button>
                    <button
                        type="button"
                        class="js-cookie-consent-agree cookie-consent__agree inline-flex items-center justify-center px-6 py-3 bg-white text-[#198fd9] rounded-lg font-semibold text-sm shadow-lg hover:shadow-xl hover:bg-gray-50 transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-white/50 active:scale-95 w-full sm:w-auto"
                        aria-label="Accept cookies"
                    >
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
