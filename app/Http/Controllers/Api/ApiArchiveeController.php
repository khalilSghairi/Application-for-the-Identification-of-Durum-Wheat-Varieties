<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiArchiveeController extends Controller
{

    public function ListClass(){
        $classes= \App\Models\Classe::all();

        return response()->json([

            'Classe'=> $classes
        ]);

    }

    public function ListDerci($id)
    {

        $ListDerci = DB::table('descri__classes')
            ->where('descri__classes.classe_id', '=', $id)
            ->get();

            return response()->json(['Descri'=>$ListDerci]);

    }
}
