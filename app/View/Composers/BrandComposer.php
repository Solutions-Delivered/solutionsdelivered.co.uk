<?php

namespace App\View\Composers;

use Illuminate\View\View;

class BrandComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with([
            'brandColors' => config('brand.colors'),
            'companyInfo' => config('brand.company'),
            'contactInfo' => config('brand.contact'),
            'navigation' => config('brand.navigation'),
            'trustIndicators' => config('brand.trust_indicators'),
        ]);
    }
}
