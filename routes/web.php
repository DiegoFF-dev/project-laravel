<?php

use Illuminate\Support\Facades\Mail;

Auth::routes();

Route::group(['namespace' => 'Site'], function () {
 Route::get('envio-email', function () {
  $request        = new stdClass();
  $request->name  = 'Diego Ferreira';
  $request->email = 'ideiaeagle@gmail.com';
  return new \App\Mail\SendDirectMail($request);
 });

 Route::get('/', 'IndexController@index')->name('site-index');
 Route::post('/', 'SubcriptionController@storage')->name('site-subscription');

 Route::get('pagamento-deposito', 'SubcriptionController@msg_deposito')->name('site-pagamento-deposito');
 Route::get('print-pdf', 'SubcriptionController@printPDF')->name('site-print-pdf');
 Route::get('pagamento-cartao', 'SubcriptionController@msg_cartao')->name('site-pagamento-cartao');

 Route::get('redirect-pagseguro', 'SubcriptionController@cartao')->name('site-redirect-cartao');
});

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
 Route::get('', 'HomeController@index')->name('home');
 Route::get('/home', 'HomeController@index')->name('home');

 Route::group(['prefix' => 'content'], function () {
  Route::get('list-content', 'ContentController@index')->name('admin-list-content');
  Route::get('list-content-edit/{id}', 'ContentController@edit')->name('admin-edit-content');
  Route::post('update/{id}', 'ContentController@update')->name('admin-update-content');
 });

 Route::group(['prefix' => 'included'], function () {
    Route::resource('item', 'IncludedController');    
   });

});
