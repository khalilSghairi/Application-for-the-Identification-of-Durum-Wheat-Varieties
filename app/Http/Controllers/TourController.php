<?php

namespace App\Http\Controllers;
use App\helpers\Helper;
use App\Models\User;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    public function ListTour()
    {
      $tours =\App\Models\Tour::with('user')->paginate(200000);
      return view('AffecterTour.displayTour', compact('tours'));
    }

    public function getAddTour()
    {

      $users  = \App\Models\User::all();
      return view('AffecterTour.addTour',compact('users'));
    }



    public function AddTour(Request $request)
    {

        $validated = $request->validate([

            'user' => ['required'],
            'date_tour' => ['required'],
            'labo' => ['required'],
        ]);

        if($request->hasFile('image')){
            $file=$request->file("image");
            $image=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("assets/image/"),$image);
        }
      $tours = new \App\Models\Tour();
      $tours->user_id = $request['user'];
      $tours->date_tour = $request['date_tour'];
      $tours->labo = $request['labo'];

      $tours->save();
      $username = User::where('id', $request->user)->where('firstname', '!=', null)->first();
     //dd($username["firstname"]) ;

       $data = [
         'data' => [
           'title' => 'Nouvelle tour',
           'body' => ' Bonjour '. $username["firstname"] .' '.$username["lastname"].', vous avez réçu une nouvelle Tour, date de tour '  . $tours->date_tour . '  et local  ' . $tours->labo  
         ]
       ];
      $user = User::where('id', $request->user)->where('device_token', '!=', null)->first();

      if(isset($user["device_token"] ) ){

        sendPush($user["device_token"], $data);

      }



      //bloc send notification

      return redirect()->route('ListTour', compact('tours'));;
    }
}
