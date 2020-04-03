<?php

namespace App\Http\Controllers\site;

use App\Clients;
use App\Http\Controllers\Controller;
use App\Mail\SendDirectMail;
use App\Mail\SendSubcriptionUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class SubcriptionController extends Controller
{
 public function storage(Request $request)
 {

  $validadeData = $this->_validate($request);
  Clients::create($validadeData);
  $this::enviar_email($request);
  if ($request->pay === 'Cartao') {
   return redirect()->route('site-pagamento-cartao');
  } else {
   return redirect()->route('site-pagamento-deposito');
  }

 }

 protected function enviar_email(Request $request)
 {
  Mail::to('ideiaeagle@gmail.com')->send(new SendSubcriptionUser($request));
  Mail::to($request->email)->send(new SendDirectMail($request));
 }

 protected function msg_cartao()
 {
  return view('site.msg-pagamento-cartao');
 }

 protected function msg_deposito()
 {
  return view('site.msg-pagamento-deposito');
 }

 protected function printPDF()
 {
  $pdf = \PDF::loadView('site.pdf_view');  
  return $pdf->download('conta-deposito.pdf');  
 }

 public function cartao()
 {
  return view('site.redirect-pagseguro');
 }

 public function _validate(Request $request)
 {
  return $request->validate([
   'name'               => 'required|max:255',
   'birthday'           => 'required',
   'email'              => 'required',
   'phone'              => 'required',
   'marital_status'     => 'required',
   'children'           => 'required',
   'enterprise'         => 'required',
   'role'               => 'required|max:100',
   'address'            => 'required',
   'number'             => 'required',
   'pay'                => 'required',
   'academic_education' => 'max:255',
   'medicines'          => 'nullable',
   'special_needs'      => 'nullable',
   'food'               => 'nullable',
   'allergy'            => 'nullable',
   'message'            => 'nullable',
  ],
   [
    'name.required'     => 'Por favor informe um nome.',
    'birthday.required' => 'Por favor informe uma data de nascimento.',
    'email.required'    => 'Por favor informe um e-mail valido.',
   ]);
 }
}
