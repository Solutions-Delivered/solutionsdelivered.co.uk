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
        ],

    ],

];
