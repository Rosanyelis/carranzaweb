<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailContact extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $phone;
    public $company;
    public $subject;
    public $email;
    public $msj;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $phone, $company, $subject, $email, $msj)
    {

        $this->name = $name;
        $this->phone = $phone;
        $this->company = $company;
        $this->subject = $subject;
        $this->email = $email;
        $this->msj = $msj;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:  ''.$this->subject.'',
        );

    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
            with: [
                'name' => $this->name,
                'phone' => $this->phone,
                'company' => $this->company,
                'subject' => $this->subject,
                'msj' => $this->msj,
                'email' => $this->email
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
