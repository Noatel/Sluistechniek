<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
            ->from('sluistechniek@gmail.nl', 'Sluistechniek')->subject('Offerte - Sluistechniek')
            ->with([
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'description' => $this->data['message'],
            ]);
    }
}
