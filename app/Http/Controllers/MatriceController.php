<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MatriceController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    public function ListClasse()
    {
      $classes =\App\Models\Classe::all();
      return view('GérerMatrice.dsplay_matrice', compact('classes'));
    }

    public function AddClass()
    {

      return view('GérerMatrice.addClass');
    }

    public function AddClasse(Request $request)
    {

    $classes = new \App\Models\Classe();
    $classes->name=$request['name'];
    $classes->save();
    $classes=\App\Models\Classe::all();
    return view('GérerMatrice.dsplay_matrice', compact('classes'));
    }

    public function getUpdateClasse(Request $request,$id)
    {
     $classes=\App\Models\Classe::find($id);
     return view('GérerMatrice.updateClass',compact('classes'));
    }

    public function UpdateClasse(Request $request)
    {

     $id=$request['id'];
     $classes=\App\Models\Classe::find($id);
     $classes->name=$request['name'];

     $classes->update();
     return redirect()->route('ListClasse',compact('classes'));

    }

    public function DeleteClasse($id)
    {

     $classes=\App\Models\Classe::find($id);
     $classes->delete();
     $classes=\App\Models\Classe::all();
     return redirect()->route('ListClasse',compact('classes'));
     }

     public function ListDescriClass($id)
     {



        $DescriClass = DB::table('descri__classes')
            ->where('descri__classes.classe_id', '=', $id)
            ->get();

            return view('GérerMatrice.displayDescriClasse', compact('DescriClass'));

    }

    public function getAddDescri()
    {

      $classes  = \App\Models\Classe::all();
      $caracteres  = \App\Models\Caractere::all();
      $etats  = \App\Models\Etat::all();
      return view('GérerMatrice.addDescriClasse',compact('classes','caracteres','etats'));
    }

    public function AddDerscri(Request $request)
    {


      $dscri = new \App\Models\Descri_Classe();
      $dscri->classe_id = $request['classe_id'];
      $dscri->caractere_name = $request['caractere_name'];
      $dscri->etat_name = $request['etat_name'];
      
      $dscri->save();
      $dscri=\App\Models\Descri_Classe::all();
      return redirect()->route('ListClasse');
    }

    public function DeleteDescri($id)
    {

     $dscri=\App\Models\Descri_Classe::find($id);
     $dscri->delete();
     $dscri=\App\Models\Descri_Classe::all();
     return redirect()->route('ListClasse');
     }

}
