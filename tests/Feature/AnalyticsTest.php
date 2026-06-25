<?php

it('renders the consent-gated GA4 tag when analytics is enabled with a measurement id', function () {
    config()->set('services.analytics.enabled', true);
    config()->set('services.analytics.ga4_measurement_id', 'G-TESTID123');

    $this->get(route('home'))
        ->assertOk()
        ->assertSee('https://www.googletagmanager.com/gtag/js?id=G-TESTID123', false)
        ->assertSee("gtag('consent', 'default'", false)
        ->assertSee("analytics_storage: 'denied'", false)
        ->assertSee('laravel_cookie_consent=1', false);
});

it('omits GA4 when analytics is disabled', function () {
    config()->set('services.analytics.enabled', false);
    config()->set('services.analytics.ga4_measurement_id', 'G-TESTID123');

    $this->get(route('home'))
        ->assertOk()
        ->assertDontSee('gtag/js?id=', false);
});

it('omits GA4 when no measurement id is configured', function () {
    config()->set('services.analytics.enabled', true);
    config()->set('services.analytics.ga4_measurement_id', null);

    $this->get(route('home'))
        ->assertOk()
        ->assertDontSee('gtag/js?id=', false);
});
