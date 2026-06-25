{{-- Google Analytics 4 (gtag), gated on cookie consent via Consent Mode v2.
     analytics_storage stays denied until the visitor accepts cookies, so no
     analytics cookies are set pre-consent, in line with the privacy policy. --}}
@if(config('services.analytics.enabled') && config('services.analytics.ga4_measurement_id'))
    @php($ga4Id = config('services.analytics.ga4_measurement_id'))
    @php($consentCookie = config('cookie-consent.cookie_name', 'laravel_cookie_consent'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $ga4Id }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('consent', 'default', {
            ad_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied',
            analytics_storage: 'denied',
        });
        {{-- Honour a consent decision already made on a previous visit. --}}
        if (document.cookie.split('; ').indexOf('{{ $consentCookie }}=1') !== -1) {
            gtag('consent', 'update', { analytics_storage: 'granted' });
        }
        gtag('config', '{{ $ga4Id }}');
        {{-- Grant the moment the visitor accepts, without needing a reload. --}}
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.js-cookie-consent-agree').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    gtag('consent', 'update', { analytics_storage: 'granted' });
                });
            });
        });
    </script>
@endif
