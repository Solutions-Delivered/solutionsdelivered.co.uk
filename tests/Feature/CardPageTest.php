<?php

it('renders the digital business card', function () {
    $response = $this->get('/card');

    $response->assertOk()
        ->assertSee('The AI Starter Kit')
        ->assertSee('Save my contact')
        ->assertSee('Two ways to work with me')
        ->assertSee('Practical AI that gives you your week back');
});

it('links the paid paths to the on-site product pages', function () {
    $this->get('/card')
        ->assertSee(route('foundations-os'))
        ->assertSee(route('ai-foundations'));
});

it('accepts a valid AI Starter Kit signup and confirms it', function () {
    $response = $this->post('/card/ai-starter-kit', [
        'email' => 'owner@example.com',
    ]);

    $response->assertRedirect()
        ->assertSessionHas('card_kit_sent', true)
        ->assertSessionHas('card_kit_email', 'owner@example.com');
});

it('shows the on-its-way state after a successful signup', function () {
    $this->followingRedirects()
        ->post('/card/ai-starter-kit', ['email' => 'owner@example.com'])
        ->assertOk()
        ->assertSee('On its way')
        ->assertSee('owner@example.com');
});

it('rejects an invalid email', function () {
    $this->post('/card/ai-starter-kit', ['email' => 'not-an-email'])
        ->assertSessionHasErrors('email');
});

it('requires an email', function () {
    $this->post('/card/ai-starter-kit', [])
        ->assertSessionHasErrors('email');
});
