<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RecevoirRapportController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    public function ListRapport()
    {
        $rapports=\App\Models\Rapport::all();
        return view('RecevoirRapport.displayRapport',compact('rapports'));
    }

    public function ListDescriRapport($id)
    {


        $DescriRapport = \App\Models\DescriRapport::with('caractere')
            ->where('descri_rapports.rapport_id', '=', $id)
            ->get();

        return view('RecevoirRapport.displayDescriRapport', compact('DescriRapport'));
    }
}
