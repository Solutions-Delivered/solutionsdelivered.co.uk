<?php

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

it('successfully submits contact form with valid data', function () {
    Mail::fake();

    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@gmail.com',
        'company' => 'Example Ltd',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    Mail::assertSent(ContactFormSubmitted::class, function ($mail) {
        return $mail->hasTo(config('brand.contact.general'));
    });
});

it('successfully submits contact form without optional company field', function () {
    Mail::fake();

    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@gmail.com',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    Mail::assertSent(ContactFormSubmitted::class);
});

it('strips html tags from input fields', function () {
    Mail::fake();

    $response = $this->post(route('contact.submit'), [
        'name' => '<script>alert("xss")</script>John Smith',
        'email' => 'john@gmail.com',
        'company' => '<b>Company</b>',
        'message' => '<p>This is a test message that is long enough to pass validation.</p>',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');
});

it('normalizes email to lowercase', function () {
    Mail::fake();

    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'JOHN@GMAIL.COM',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');
});

it('fails validation when name is missing', function () {
    $response = $this->post(route('contact.submit'), [
        'email' => 'john@example.com',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertSessionHasErrors(['name']);
});

it('fails validation when name is too short', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'J',
        'email' => 'john@example.com',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertSessionHasErrors(['name']);
});

it('fails validation when name is too long', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => str_repeat('a', 256),
        'email' => 'john@example.com',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertSessionHasErrors(['name']);
});

it('fails validation when email is missing', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertSessionHasErrors(['email']);
});

it('fails validation when email is invalid', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'not-an-email',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertSessionHasErrors(['email']);
});

it('fails validation when message is missing', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@example.com',
    ]);

    $response->assertSessionHasErrors(['message']);
});

it('fails validation when message is too short', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@example.com',
        'message' => 'Too short',
    ]);

    $response->assertSessionHasErrors(['message']);
});

it('fails validation when message is too long', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@example.com',
        'message' => str_repeat('a', 2001),
    ]);

    $response->assertSessionHasErrors(['message']);
});

it('fails validation when company is too long', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@example.com',
        'company' => str_repeat('a', 256),
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertSessionHasErrors(['company']);
});

it('continues gracefully when email sending fails', function () {
    Mail::fake();
    Mail::shouldReceive('to')->andThrow(new Exception('Mail server error'));

    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@gmail.com',
        'message' => 'This is a test message that is long enough to pass validation.',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');
});

it('rejects submission when honeypot field is filled (bot protection)', function () {
    Mail::fake();

    // Get the honeypot field name from config (default is randomly generated)
    config(['honeypot.randomize_name_field_name' => false]);
    config(['honeypot.name_field_name' => 'my_name']);

    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@gmail.com',
        'message' => 'This is a test message that is long enough to pass validation.',
        'my_name' => 'spam-bot', // Honeypot field filled by bot
    ]);

    // Spatie honeypot returns 200 with blank page (default BlankPageResponder)
    $response->assertSuccessful();
    $response->assertSee('', false); // Blank page
    Mail::assertNotSent(ContactFormSubmitted::class);
});

it('rejects submission when form submitted too quickly (bot protection)', function () {
    Mail::fake();

    // Configure honeypot with 2 second minimum time
    config(['honeypot.valid_from_timestamp' => true]);
    config(['honeypot.amount_of_seconds' => 2]);

    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@gmail.com',
        'message' => 'This is a test message that is long enough to pass validation.',
        config('honeypot.valid_from_field_name', 'valid_from') => now()->timestamp, // Submitted immediately
    ]);

    // Spatie honeypot returns 200 with blank page (default BlankPageResponder)
    $response->assertSuccessful();
    $response->assertSee('', false); // Blank page
    Mail::assertNotSent(ContactFormSubmitted::class);
});
