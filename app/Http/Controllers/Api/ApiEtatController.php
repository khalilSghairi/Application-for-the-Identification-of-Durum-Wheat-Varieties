<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiEtatController extends Controller
{

    public function ListEtat($id)
    {

        $ListEtat = DB::table('etats')
            ->where('etats.caractere_id', '=', $id)
            ->get();

            return response()->json(['Etat'=>$ListEtat]);  

    }
}
