<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationCodeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public string $registrationCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $registrationCode)
    {
        $this->registrationCode = $registrationCode;
    }
    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Регистрация в сервисе SocialHit',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return Content
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.confirmation',
            with: [
                'registrationCode' => $this->registrationCode
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
