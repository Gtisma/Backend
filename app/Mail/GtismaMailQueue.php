<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GtismaMailQueue extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    protected $eview;
    protected $eto;
    protected $efrom;
    protected $esubject;
    public $extra;

    public function __construct($emailcontent, $emailview, $eto, $efrom, $esubject, $additional = null)
    {
        $this->data = $emailcontent;
        $this->eview = $emailview;
        $this->eto = $eto;
        $this->efrom = $efrom;
        $this->esubject = $esubject;
        if ($additional != null) {
            $this->extra = $additional;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->efrom, 'GTISMA')
            ->subject($this->esubject)->replyTo($this->efrom)->view($this->eview);

    }
}



