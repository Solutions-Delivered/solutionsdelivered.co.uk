<?php

namespace App\Services\Polar;

final class CheckoutConfirmation
{
    public function __construct(
        public readonly ConfirmationState $state,
        public readonly ?string $customerName = null,
        public readonly ?string $customerEmail = null,
        public readonly ?string $productName = null,
    ) {}

    public static function verified(?string $customerName, ?string $customerEmail, ?string $productName): self
    {
        return new self(ConfirmationState::Verified, $customerName, $customerEmail, $productName);
    }

    public static function for(ConfirmationState $state): self
    {
        return new self($state);
    }

    public function isVerified(): bool
    {
        return $this->state === ConfirmationState::Verified;
    }

    public function wrongProduct(): bool
    {
        return $this->state === ConfirmationState::Mismatch;
    }

    public function notPaid(): bool
    {
        return $this->state === ConfirmationState::Unpaid;
    }

    /**
     * True when we simply could not confirm the checkout (no id, not found,
     * or Polar was unreachable) — as opposed to an active rejection.
     */
    public function couldNotConfirm(): bool
    {
        return in_array($this->state, [ConfirmationState::NotFound, ConfirmationState::Unverified], true);
    }
}
