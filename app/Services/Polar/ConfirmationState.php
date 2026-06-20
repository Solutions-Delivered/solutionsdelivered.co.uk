<?php

namespace App\Services\Polar;

enum ConfirmationState
{
    /** A real checkout for this product, paid in full. */
    case Verified;

    /** A real checkout, but the payment has not completed (open, expired, failed). */
    case Unpaid;

    /** A real checkout, but for a different product than this page. */
    case Mismatch;

    /** Polar has no checkout with the supplied id. */
    case NotFound;

    /** No checkout id supplied, Polar not configured, or a transient API error. */
    case Unverified;
}
