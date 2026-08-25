<?php

it('serves llms.txt as plain text with key business facts', function () {
    $response = $this->get('/llms.txt');

    $response->assertOk();
    expect($response->headers->get('Content-Type'))->toContain('text/plain');
    $response->assertSee(config('brand.company.name'), false);
    $response->assertSee(route('foundations-os'), false);
    $response->assertSee(config('brand.contact.general'), false);
});

it('serves the brochure PDF with a noindex header', function () {
    $response = $this->get('/brochure.pdf');

    $response->assertOk();
    expect($response->headers->get('Content-Type'))->toBe('application/pdf');
    expect($response->headers->get('X-Robots-Tag'))->toBe('noindex');
    // Set-Cookie would stop Cloudflare edge-caching the response.
    expect($response->headers->getCookies())->toBeEmpty();
});

it('includes the Foundations OS sales page in the sitemap', function () {
    $this->get('/sitemap.xml')
        ->assertOk()
        ->assertSee(route('foundations-os'), false);
});

it('exposes the corrected organisation tax identifiers sitewide', function () {
    $response = $this->get(route('home'));

    $response->assertSee(config('brand.company.vat_number'), false);
    // The company registration number must not be presented as a taxID.
    $response->assertDontSee('"taxID"', false);
});

it('renders Person schema on the about page', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertSee('"@type": "Person"', false)
        ->assertSee('Sam Jenkins', false);
});

it('renders Product and FAQPage schema on the Foundations OS page', function () {
    $this->get(route('foundations-os'))
        ->assertOk()
        ->assertSee('"@type":"Product"', false)
        ->assertSee('"@type":"FAQPage"', false);
});

it('keeps the visible FAQ content after the schema refactor', function () {
    $this->get(route('foundations-os'))
        ->assertOk()
        ->assertSee('solving problems you have already hit', false)
        ->assertSee('Do I need Claude already, and which plan?', false);
});

it('shows the VAT number in the footer and terms', function () {
    $this->get(route('terms'))
        ->assertOk()
        ->assertSee(config('brand.company.vat_number'), false);
});

it('shows the ICO registration reference on the privacy page', function () {
    $this->get(route('privacy'))
        ->assertOk()
        ->assertSee(config('brand.company.ico_number'), false);
});

it('links the LinkedIn profile in the footer and entity schema', function () {
    $linkedin = config('brand.social.linkedin');

    expect($linkedin)->not->toBeNull();
    $this->get(route('about'))
        ->assertOk()
        ->assertSee($linkedin, false)        // footer link
        ->assertSee('"@type": "Person"', false);
});

it('serves the hero image as a responsive picture with modern formats', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('sam-presenting-800.avif', false)
        ->assertSee('sam-presenting-800.webp', false)
        ->assertSee('type="image/avif"', false);
});

it('serves the about headshot as a responsive picture', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertSee('sam-headshot-400.avif', false)
        ->assertSee('sam-headshot-400.webp', false);
});

it('renders WebSite schema sitewide', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('"@type": "WebSite"', false);
});

it('renders Service and OfferCatalog schema on the consultancy page', function () {
    $this->get(route('consultancy'))
        ->assertOk()
        ->assertSee('"@type":"Service"', false)
        ->assertSee('"@type":"OfferCatalog"', false)
        ->assertSee('SaaS Discovery', false);
});

// Laravel 13 added a built-in Blade directive that shares its name with the
// JSON-LD context key, so a literal key in a Blade array compiles to raw PHP
// and silently invalidates the whole block. Substring assertions miss this
// because every other key still renders, so parse the JSON instead.
it('renders valid, parseable JSON-LD on every public page', function (string $route) {
    $html = $this->get(route($route))->assertOk()->getContent();

    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $matches);

    expect($matches[1])->not->toBeEmpty();

    foreach ($matches[1] as $block) {
        $decoded = json_decode(trim($block), true);

        expect(json_last_error())->toBe(JSON_ERROR_NONE)
            ->and($decoded)->toBeArray()
            ->and($decoded)->toHaveKey('@context')
            ->and($decoded['@context'])->toBe('https://schema.org');
    }
})->with(['home', 'about', 'consultancy', 'foundations-os', 'how-it-works', 'contact']);
