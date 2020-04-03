<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
 public function index()
 {
  $data = Content::all();
  return view('admin.content.list', compact('data'));
 }

 public function edit($id)
 {
  $data = Content::findOrFail($id);
  return view('admin.content.edit', compact('data'));

 }
 public function update(Request $request, $id)
 {
    $content = Content::findOrFail($id);
    $this->_validate($request);
    $data = $request->all();
    $content->fill($data);
    $content->save();
    return redirect()->route('admin-list-content')->with('status', "Atualizado com sucesso!");

 }

 protected function _validate(Request $request)
 {
  return $request->validate([
   'ascape'     => "required",
   'source'     => "required",
   'finality'   => "required",
   'goal'       => "required",
   'vision'     => "required",
   'activities' => "required",
   'place'      => "required",
   'next'       => "required",
   'amount'     => "required",
  ]);

 }
}
