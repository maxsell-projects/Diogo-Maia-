<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactLead extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Novo Contacto: ' . ($this->data['subject'] ?? 'Website Diogo Maia'),
            replyTo: [$this->data['email']]
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact', // Vamos criar esta view agora
        );
    }
}