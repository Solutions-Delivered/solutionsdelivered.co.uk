<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sellable Polar products
    |--------------------------------------------------------------------------
    |
    | Slug-keyed registry of products sold through Polar. Each slug drives a
    | /thank-you/{slug} confirmation page and must have a matching
    | resources/views/thank-you/{slug}.blade.php view.
    |
    | Product ids differ between the sandbox and production Polar
    | environments, so they are pulled from the environment rather than
    | hard-coded here.
    |
    */

    'products' => [

        'foundations-os' => [
            'product_id' => env('POLAR_PRODUCT_FOUNDATIONS_OS'),

            // Hosted Polar checkout link the buy button points at. Its
            // success_url is configured in Polar to return to
            // /thank-you/foundations-os?checkout_id={CHECKOUT_ID}.
            'checkout_url' => env('POLAR_CHECKOUT_FOUNDATIONS_OS'),

            // Display price for the product page (the charge itself is set in
            // Polar). Integer GBP.
            'price' => 197,

            // Master switch for the buy buttons. While false, every CTA falls
            // back to "register your interest" and the checkout link above is
            // not exposed. Flip to true to go on sale (pending Polar approval).
            'on_sale' => true,
        ],

    ],

];
