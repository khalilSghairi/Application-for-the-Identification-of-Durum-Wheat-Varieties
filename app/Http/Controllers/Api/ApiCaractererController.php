<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiCaractererController extends Controller
{
    public function ListCaractere(){
        $caracters= \App\Models\Caractere::all();

        return response()->json([

            'listCaractere'=> $caracters

        ]);

    }


}
