<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSubcriptionUser extends Mailable
{
 use Queueable, SerializesModels;

 public $request;
 public $data;
 /**
  * Create a new message instance.
  *
  * @return void
  */
 public function __construct(Request $request)
 {
  $this->request = $request;
  
  date_default_timezone_set('America/Sao_Paulo');
  $dataLocal  = date('d/m/Y H:i:s', time());
  $this->data = $dataLocal;

 }

 /**
  * Build the message.
  *
  * @return $this
  */
 public function build()
 {
  return $this->subject('Ficha de Inscrição')->markdown('site.mail.send_subscription');
 }
}
