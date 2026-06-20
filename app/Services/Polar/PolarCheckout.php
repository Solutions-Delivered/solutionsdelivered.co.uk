<?php

namespace App\Services\Polar;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class PolarCheckout
{
    /**
     * Polar checkout statuses that represent a completed, paid purchase.
     *
     * @var list<string>
     */
    private const PAID_STATUSES = ['confirmed', 'succeeded'];

    public function __construct(
        private readonly ?string $token,
        private readonly string $baseUrl,
    ) {}

    /**
     * Confirm a Polar checkout id server-side and assert it belongs to the
     * expected product. The query-string checkout_id is attacker-controllable,
     * so this API round-trip is the only source of truth.
     */
    public function confirm(?string $checkoutId, ?string $expectedProductId): CheckoutConfirmation
    {
        if (blank($checkoutId) || blank($expectedProductId) || blank($this->token)) {
            return CheckoutConfirmation::for(ConfirmationState::Unverified);
        }

        try {
            $response = Http::withToken($this->token)
                ->acceptJson()
                ->timeout(10)
                ->get("{$this->baseUrl}/v1/checkouts/{$checkoutId}");
        } catch (Throwable $e) {
            Log::warning('Polar checkout confirmation failed: '.$e->getMessage());

            return CheckoutConfirmation::for(ConfirmationState::Unverified);
        }

        if ($response->notFound()) {
            return CheckoutConfirmation::for(ConfirmationState::NotFound);
        }

        if ($response->failed()) {
            Log::warning('Polar checkout confirmation returned HTTP '.$response->status());

            return CheckoutConfirmation::for(ConfirmationState::Unverified);
        }

        $checkout = $response->json();

        if (($checkout['product_id'] ?? null) !== $expectedProductId) {
            return CheckoutConfirmation::for(ConfirmationState::Mismatch);
        }

        if (! in_array($checkout['status'] ?? null, self::PAID_STATUSES, true)) {
            return CheckoutConfirmation::for(ConfirmationState::Unpaid);
        }

        return CheckoutConfirmation::verified(
            customerName: $checkout['customer_name'] ?? null,
            customerEmail: $checkout['customer_email'] ?? null,
            productName: $checkout['product']['name'] ?? null,
        );
    }
}
