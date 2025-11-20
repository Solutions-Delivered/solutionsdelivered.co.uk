<?php

it('returns 200 for home page', function () {
    $this->get(route('home'))->assertOk();
});

it('returns 200 for about page', function () {
    $this->get(route('about'))->assertOk();
});

it('returns 200 for careers page', function () {
    $this->get(route('careers'))->assertOk();
});

it('returns 200 for get started page', function () {
    $this->get(route('get-started'))->assertOk();
});

it('returns 200 for how we work page', function () {
    $this->get(route('how-we-work'))->assertOk();
});

it('returns 200 for solutions page', function () {
    $this->get(route('solutions'))->assertOk();
});

it('returns 200 for privacy page', function () {
    $this->get(route('privacy'))->assertOk();
});

it('returns 200 for terms page', function () {
    $this->get(route('terms'))->assertOk();
});
