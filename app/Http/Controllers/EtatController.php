<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtatController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    public function ListEtat()
    {
      $etats =\App\Models\Etat::with('caractere')->paginate(200000);
      return view('GérerEtat.displayEtat', compact('etats'));
    }

    public function getAddEtat()
    {

      $caracteres  = \App\Models\Caractere::all();
      return view('GérerEtat.addEtat',compact('caracteres'));
    }

    public function AddEtat(Request $request)
    {
      $this->validate($request, [

        'name' => 'required|max:255',

      ]);

      $etats = new \App\Models\Etat();
      $etats->caractere_id = $request['caractere'];
      $etats->name = $request['name'];
      $etats->value = $request['value'];
      $etats->save();
      $etats=\App\Models\Etat::all();
      return redirect()->route('ListEtat', compact('etats'));
    }

    public function getUpdateEtat(Request $request,$id)
  {

   $etats=\App\Models\Etat::find($id);
   return view('GérerEtat.UpdateEtat',compact('etats'));
  }



      public function UpdateEtat(Request $request)
    {

     $id=$request['id'];
     $etats=\App\Models\Etat::find($id);
     $etats->caractere_id = $request['caractere'];
     $etats->name = $request['name'];
     $etats->value = $request['value'];
     $etats->update();
     return redirect()->route('ListEtat',compact('etats'));

    }


    public function DeleteEtat(Request $request)
    {
        $id=$request['id'];
        $Etat=\App\Models\Etat::find($id);
        $Etat->delete();
        $etats=\App\Models\Etat::all();
        return redirect()->route('ListEtat',compact('etats'));
     }

}
