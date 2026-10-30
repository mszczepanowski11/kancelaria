<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array{imie: string, nazwisko: string, email: string, telefon: ?string, temat: string, tresc: string}  $data
     */
    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        $name = $this->data['imie'].' '.$this->data['nazwisko'];

        return new Envelope(
            subject: 'Formularz: '.$this->data['temat'].' - '.$name,
            replyTo: [new Address($this->data['email'], $name)],
        );
    }

    public function content(): Content
    {
        return new Content(text: 'emails.contact');
    }
}
