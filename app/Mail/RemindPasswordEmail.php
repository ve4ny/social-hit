<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RemindPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected string $remindToken;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $remindToken)
    {
        $this->remindToken = $remindToken;
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Сброс пароля',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.remind-password',
            with: [
                'url' => config('app.url'),
                'remindToken' => $this->remindToken
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
