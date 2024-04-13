<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClasserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ListRapport()
    {
        $rapports = \App\Models\Rapport::all();
        return view('ClasserImage.ListRapport', compact('rapports'));
    }

    public function ListImage($id)
    {

        $Images = DB::table('images')
            ->where('images.rapport_id', '=', $id)
            ->get();

        return view('ClasserImage.ListImage', compact('Images',));
    }



    public function classify($id)
    {
        $Image = DB::table('images')
            ->where('images.id', '=', $id)
            ->first();
            // dd(base64_encode(file_get_contents(public_path().'/assets/image/' . $Image->image)));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'localhost:5000/classify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "image":"' . base64_encode(file_get_contents(public_path().'/assets/image/' . $Image->image)) . '"}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}
