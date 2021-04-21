<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendmail extends Mailable
{
    use Queueable, SerializesModels;

    public $template;
    public $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template,$id_client)
    {

        $this->template = $template;
        $this->client =Client::find($id_client);
        // dd(Client::find($id_client));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bienvenue !')
                    ->view($this->template, ['user' => $this->client]);
    }
}
