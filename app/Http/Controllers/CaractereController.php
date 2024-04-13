<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaractereController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    public function ListCarctere()
    {
        $caracteres=\App\Models\Caractere::all();
        return view('GérerCaractere.displayCaractere',compact('caracteres'));
    }

    public function getAddCaractere()
    {

        return view('GérerCaractere.addCaractere');
    }

    public function AddCaractere(Request $request)
    {

    $caracteres = new \App\Models\Caractere();
    $caracteres->name=$request['name'];
    $caracteres->save();
    $caracteres=\App\Models\Caractere::all();
    return redirect()->route('ListCarctere',compact('caracteres'));
    }

    public function getUpdateCaractere(Request $request,$id)
    {
     $caracteres=\App\Models\Caractere::find($id);
     return view('GérerCaractere.updateCaractere',compact('caracteres'));
    }

      public function UpdateCaractere(Request $request)
    {

     $id=$request['id'];
     $caracteres=\App\Models\Caractere::find($id);
     $caracteres->name=$request['name'];

     $caracteres->update();
     return redirect()->route('ListCarctere',compact('caracteres'));

    }

    public function DeleteCaracterer($id)
    {

     $caracteres=\App\Models\Caractere::find($id);
     $caracteres->delete();
     $caracteres=\App\Models\Caractere::all();
     return redirect()->route('ListCarctere',compact('caracteres'));
     }

}
