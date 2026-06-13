<?php

it('returns 200 for home page', function () {
    $this->get(route('home'))->assertOk();
});

it('returns 200 for AI Foundations page', function () {
    $this->get(route('ai-foundations'))->assertOk();
});

it('returns 200 for Foundations OS page', function () {
    $this->get(route('foundations-os'))->assertOk();
});

it('returns 200 for how it works page', function () {
    $this->get(route('how-it-works'))->assertOk();
});

it('returns 200 for consultancy page', function () {
    $this->get(route('consultancy'))->assertOk();
});

it('returns 200 for about page', function () {
    $this->get(route('about'))->assertOk();
});

it('returns 200 for contact page', function () {
    $this->get(route('contact'))->assertOk();
});

it('returns 200 for privacy page', function () {
    $this->get(route('privacy'))->assertOk();
});

it('returns 200 for terms page', function () {
    $this->get(route('terms'))->assertOk();
});

it('redirects retired routes to the new information architecture', function (string $from, string $to) {
    $this->get($from)->assertRedirect($to);
})->with([
    'solutions' => ['/solutions', '/consultancy'],
    'how-we-work' => ['/how-we-work', '/how-it-works'],
    'get-started' => ['/get-started', '/contact'],
    'packages' => ['/packages', '/consultancy'],
    'careers' => ['/careers', '/'],
]);
