<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function AddImage(Request $request)
    {

        // $filename="";
        // if($request->hasFile('image')){

        //     $filename=$request->file('image')->store('posts','public');

        // }else{
        //     $filename="Null";
        // }

        if($request->hasFile('image')){
            $file=$request->file("image");
            $image=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("assets/image/"),$image);
        }
    $images = new \App\Models\Image();
    $images->image=$image;
    $images->rapport_id = $request['rapport_id'];
    $images->save();

    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);


    }
}
