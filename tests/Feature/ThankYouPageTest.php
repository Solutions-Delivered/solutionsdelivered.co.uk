<?php

use Illuminate\Support\Facades\Http;

beforeEach(function () {
    config()->set('services.polar.token', 'polar_test_token');
    config()->set('services.polar.base_url', 'https://sandbox-api.polar.sh');
    config()->set('polar.products.foundations-os.product_id', 'prod_foundations_os');
});

function fakeCheckout(array $overrides = []): array
{
    return array_merge([
        'id' => 'checkout_123',
        'status' => 'succeeded',
        'product_id' => 'prod_foundations_os',
        'product' => ['name' => 'Foundations OS'],
        'customer_name' => 'Ada Lovelace',
        'customer_email' => 'ada@example.com',
    ], $overrides);
}

it('returns 404 for a slug that is not a sellable product', function () {
    $this->get('/thank-you/not-a-real-product')->assertNotFound();
});

it('returns 404 for a product with no Polar product id', function () {
    config()->set('polar.products.foundations-os.product_id', null);

    $this->get('/thank-you/foundations-os')->assertNotFound();
});

it('confirms a valid paid checkout and shows the getting-started steps', function () {
    Http::fake([
        'sandbox-api.polar.sh/v1/checkouts/*' => Http::response(fakeCheckout()),
    ]);

    $response = $this->get('/thank-you/foundations-os?checkout_id=checkout_123');

    $response->assertOk();
    $response->assertSee('Payment confirmed, Ada Lovelace', false);
    $response->assertSee('Set up in three steps');
    $response->assertSee('Download your workspace');

    Http::assertSent(fn ($request) => $request->hasHeader('Authorization', 'Bearer polar_test_token')
        && str_contains($request->url(), '/v1/checkouts/checkout_123'));
});

it('rejects a checkout for a different product', function () {
    Http::fake([
        'sandbox-api.polar.sh/v1/checkouts/*' => Http::response(fakeCheckout(['product_id' => 'prod_something_else'])),
    ]);

    $response = $this->get('/thank-you/foundations-os?checkout_id=checkout_123');

    $response->assertOk();
    $response->assertSee('different purchase');
    $response->assertDontSee('Download your workspace');
});

it('does not unlock the page for an unpaid checkout', function () {
    Http::fake([
        'sandbox-api.polar.sh/v1/checkouts/*' => Http::response(fakeCheckout(['status' => 'open'])),
    ]);

    $response = $this->get('/thank-you/foundations-os?checkout_id=checkout_123');

    $response->assertOk();
    $response->assertSee('could not confirm a completed payment');
    $response->assertDontSee('Download your workspace');
});

it('treats a forged checkout id (404 from Polar) as unconfirmed', function () {
    Http::fake([
        'sandbox-api.polar.sh/v1/checkouts/*' => Http::response(['error' => 'NotFound'], 404),
    ]);

    $response = $this->get('/thank-you/foundations-os?checkout_id=forged');

    $response->assertOk();
    $response->assertDontSee('Download your workspace');
});

it('degrades gracefully when no checkout id is supplied', function () {
    $response = $this->get('/thank-you/foundations-os');

    $response->assertOk();
    $response->assertSee('Thanks for your purchase');
    $response->assertDontSee('Download your workspace');
    Http::assertNothingSent();
});

it('accepts the confirmed (processing) status as paid', function () {
    Http::fake([
        'sandbox-api.polar.sh/v1/checkouts/*' => Http::response(fakeCheckout(['status' => 'confirmed'])),
    ]);

    $this->get('/thank-you/foundations-os?checkout_id=checkout_123')
        ->assertOk()
        ->assertSee('Download your workspace');
});
