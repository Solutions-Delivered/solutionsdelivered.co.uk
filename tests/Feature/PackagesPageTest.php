<?php

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

it('returns 200 for packages page', function () {
    $this->get(route('packages'))->assertOk();
});

it('renders all configured package names on packages page', function () {
    $response = $this->get(route('packages'));

    foreach (config('packages') as $package) {
        $response->assertSee($package['name']);
    }
});

it('marks packages page as noindex', function () {
    $this->get(route('packages'))
        ->assertSee('noindex, nofollow', false);
});

it('prefills get-started form when valid package slug is provided', function () {
    $response = $this->get(route('get-started', ['package' => 'saas-discovery']));

    $response->assertOk();
    $response->assertSee('SaaS Discovery');
    $response->assertSee('I&#039;m interested in your SaaS Discovery package', false);
    $response->assertSee('name="package"', false);
    $response->assertSee('value="saas-discovery"', false);
});

it('renders get-started normally when package slug is unknown', function () {
    $response = $this->get(route('get-started', ['package' => 'not-a-real-package']));

    $response->assertOk();
    $response->assertDontSee("I'm interested in your");
    $response->assertDontSee('value="not-a-real-package"', false);
});

it('renders get-started normally when no package param is given', function () {
    $response = $this->get(route('get-started'));

    $response->assertOk();
    $response->assertDontSee('Enquiring about:');
});

it('accepts contact submission with valid package slug', function () {
    Mail::fake();

    $response = $this->post(route('contact'), [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'message' => 'I would like to discuss the SaaS Discovery package.',
        'package' => 'saas-discovery',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    Mail::assertSent(ContactFormSubmitted::class, function ($mail) {
        return $mail->packageName === 'SaaS Discovery';
    });
});

it('rejects contact submission with unknown package slug', function () {
    Mail::fake();

    $response = $this->post(route('contact'), [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'message' => 'This is long enough to be valid.',
        'package' => 'nonexistent-package',
    ]);

    $response->assertSessionHasErrors(['package']);
    Mail::assertNotSent(ContactFormSubmitted::class);
});

it('still accepts contact submission without a package field', function () {
    Mail::fake();

    $response = $this->post(route('contact'), [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'message' => 'A normal enquiry without a package.',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    Mail::assertSent(ContactFormSubmitted::class, function ($mail) {
        return $mail->packageName === null;
    });
});
