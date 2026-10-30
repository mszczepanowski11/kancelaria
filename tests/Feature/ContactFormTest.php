<?php

namespace Tests\Feature;

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
    }

    private function payload(array $overrides = []): array
    {
        return array_merge([
            'imie' => 'Jan',
            'nazwisko' => 'Kowalski',
            'email' => 'jan@example.com',
            'telefon' => '',
            'temat' => 'Spadki i zachowek',
            'tresc' => 'Proszę o kontakt w sprawie spadku.',
            'zgoda' => '1',
            'website' => '',
            't' => now()->subMinute()->timestamp,
        ], $overrides);
    }

    public function test_public_pages_render(): void
    {
        foreach (['/', '/polityka-prywatnosci', '/cookies'] as $uri) {
            $this->get($uri)->assertOk();
        }
    }

    public function test_contact_form_sends_mail(): void
    {
        $this->postJson('/kontakt', $this->payload())
            ->assertOk()
            ->assertJson(['ok' => true]);

        Mail::assertSent(ContactFormSubmitted::class, fn ($mail) => $mail->hasTo(config('site.mail_to')));
    }

    public function test_invalid_form_is_rejected(): void
    {
        $this->postJson('/kontakt', $this->payload(['email' => 'not-an-email']))
            ->assertStatus(422)
            ->assertJson(['ok' => false]);

        Mail::assertNothingSent();
    }

    public function test_honeypot_submissions_are_dropped(): void
    {
        $this->postJson('/kontakt', $this->payload(['website' => 'http://spam.test']))
            ->assertOk();

        Mail::assertNothingSent();
    }
}
