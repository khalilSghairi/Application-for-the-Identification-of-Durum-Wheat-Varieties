<?php

namespace App\Http\Controllers;

use App\Models\DescriRapport;
use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    public function ListRapport()
    {
        $rapports = \App\Models\Rapport::all();
        return view('CalculeIndice.display_Rapport_calcul', compact('rapports'));
    }

    public function Calcul()
    {

        return view('CalculeIndice.Calcul');
    }

    public function getCalcul( $id)
    {
        $Rapport = Rapport::find($id);

        $perc = DB::select("SELECT ((SELECT count(*) FROM descri_rapports WHERE `rapport_id`={$id} )  / (SELECT count(*) FROM caracteres))  AS `perc`");
        return [
            'success' => true,
            'perc' =>  $Rapport->calcDescriRapport()[0]->total  * $perc[0]->perc  ,

        ];
    }
}
