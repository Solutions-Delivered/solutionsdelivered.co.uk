<?php

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

it('returns 200 for consultancy page', function () {
    $this->get(route('consultancy'))->assertOk();
});

it('renders all configured package names on the consultancy page', function () {
    $response = $this->get(route('consultancy'));

    foreach (config('packages') as $package) {
        $response->assertSee($package['name']);
    }
});

it('redirects the retired packages route to consultancy', function () {
    $this->get('/packages')->assertRedirect('/consultancy');
});

it('prefills the contact form when a valid package slug is provided', function () {
    $response = $this->get(route('contact', ['package' => 'saas-discovery']));

    $response->assertOk();
    $response->assertSee('SaaS Discovery');
    $response->assertSee('I&#039;m interested in your SaaS Discovery engagement', false);
    $response->assertSee('name="package"', false);
    $response->assertSee('value="saas-discovery"', false);
});

it('renders the contact form normally when the package slug is unknown', function () {
    $response = $this->get(route('contact', ['package' => 'not-a-real-package']));

    $response->assertOk();
    $response->assertDontSee("I'm interested in your");
    $response->assertDontSee('value="not-a-real-package"', false);
});

it('renders the contact form normally when no package param is given', function () {
    $response = $this->get(route('contact'));

    $response->assertOk();
    $response->assertDontSee('Enquiring about:');
});

it('prefills the contact form for a product interest topic without a package field', function () {
    $response = $this->get(route('contact', ['topic' => 'ai-foundations']));

    $response->assertOk();
    $response->assertSee('register my interest in AI Foundations', false);
    $response->assertDontSee('name="package"', false);
});

it('accepts contact submission with valid package slug', function () {
    Mail::fake();

    $response = $this->post(route('contact.submit'), [
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

    $response = $this->post(route('contact.submit'), [
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

    $response = $this->post(route('contact.submit'), [
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
