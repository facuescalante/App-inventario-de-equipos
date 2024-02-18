<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\So;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;

class SistemasOperativos extends Controller
{
  public function index()
  {
    $sos = So::all();

    return view('content.pages.sos', compact('sos'));

  }
  public function create()
  {
    return view('content.pages.sos-create');
  }
  public function store(Request $request){

    $validator = $request->validate([
      'name' => 'required',
      
    ]);
    $so = new So();
    $so->name = $request->name;
    $so->description = $request->description;
    $so->version = $request->version;
    $so->save();

    return redirect()->route('pages-sos');
}
  public function show($so_id){

    $so = So::find($so_id);
    return view('content.pages.sos-show', compact('so') );

}
  public function update(Request $request){
    $so = So::find($request->so_id);
    $so->name = $request->name;
    $so->description = $request->description;
    $so->version = $request->version;
    
    $so->save();
    
    return redirect()->route('pages-sos');
}
public function destroy($so_id){
  $so = So::find($so_id);
  $so->delete();
  return redirect()->route('pages-sos');
}
public function switch($so_id){
  $so = So::find($so_id);
  $so->active = !$so->active;
  $so->save();
  return redirect()->route('pages-sos');
}


}