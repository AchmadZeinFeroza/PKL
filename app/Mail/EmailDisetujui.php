<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailDisetujui extends Mailable
{
    use Queueable, SerializesModels;
    public $kios;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kios)
    {
        $this->kios = $kios;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('uchihaferoza22@gmail.com')->subject('Selamat! Kios Disetujui')->view('email-disetujui')->with('kios', $this->kios);
    }
}
