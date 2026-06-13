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
            'companyInfo' => config('brand.company'),
            'contactInfo' => config('brand.contact'),
            'navItems' => config('brand.nav'),
            'navCta' => config('brand.cta'),
            'socialLinks' => array_filter(config('brand.social')),
        ]);
    }
}
