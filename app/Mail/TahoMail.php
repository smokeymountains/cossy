<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TahoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $body;
    public $attachement;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $body, $attachement)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->$attachement = $$attachement;
    }
public function build(){
    return $this->markdown('admin.email.Taho');
}
    /**
     * Get the message envelope.
     */
   /* public function envelope(): Envelope
    {
        return new Envelope(
            {{ $subject }};
        );
    }

    /**
     * Get the message content definition.
     */
   /* public function content(): Content
    {
        return new Content(
            view: 'admin.email.Taho',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
   /* public function attachments(): array
    {
        return [];
    }*/
}
