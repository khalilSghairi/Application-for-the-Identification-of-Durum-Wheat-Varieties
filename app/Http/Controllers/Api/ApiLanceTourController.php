<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ApiLanceTourController extends Controller
{

    public function ListRapport($id)
    {

        $ListRapport = DB::table('rapports')
            ->where('rapports.user_id', '=', $id)
            ->get();

            return response()->json(['Rapport'=>$ListRapport]);  ;

    }
    public function AddRapport(Request $request)
    {

    $rapports = new \App\Models\Rapport();
    $rapports->user_id=$request['user_id'];
    $rapports->date_tour=$request['date_tour'];
    $rapports->coll_ORG=$request['coll_ORG'];
    $rapports->collectors=$request['collectors'];
    $rapports->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

   }


   public function AddDescriRapport(Request $request)
   {

   $descri_rapports = new \App\Models\DescriRapport();
   $descri_rapports->rapport_id=$request['rapport_id'];
   $descri_rapports->caractere_id=$request['caractere_id'];
   $descri_rapports->etat_name=$request['etat_name'];
   $descri_rapports->value=$request['value'];
   $descri_rapports->save();
   return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

  }

  public function ListDsceriRapport($id)
  {

      $ListDsceriRapport = DB::table('descri_rapports')
          ->where('descri_rapports.rapport_id', '=', $id)
          ->get();

          return response()->json(['ListDsceriRapport'=>$ListDsceriRapport]);  ;

  }
}
