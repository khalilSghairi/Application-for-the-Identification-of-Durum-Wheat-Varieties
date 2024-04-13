<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\sendMail;

class UserConstroller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    public function ListUser()
    {
        $users=\App\Models\User::all();
        return view('GérerUtilisateur.display_user',compact('users'));
    }

    public function getAddUser()
    {

        return view('GérerUtilisateur.addUser');
    }

    public function AddUser(Request $request)
    {	 $this->validate($request, [

      'firstname' => 'alpha|nullable|max:100000',
      'lastname' => 'alpha|nullable|max:100000',
      'email'=>'email|unique:users|max:1000',
      'password' => 'string|nullable|min:8',
      ]);

    $users = new \App\Models\User();
    $users->firstname=$request['firstname'];
    $users->lastname=$request['lastname'];
    $users->email=$request['email'];
    $users->password=Hash::make($request['password']);
    $users->role=$request['role'];
    $users->api_token=Str::random(60);
    Mail::to($request['email'])->send(new sendMail($request['email'],$request['password']));
    $users->save();



    $users=\App\Models\User::all();
    return redirect()->route('ListUser',compact('users'));
    }

    public function getUpdateUser(Request $request, $id)
    {
     $users=\App\Models\User::find($id);
     return view('GérerUtilisateur.updateUser',compact('users'));
    }

      public function UpdateUser(Request $request)
    {
        $this->validate($request, [

            'firstname' => 'alpha|nullable|max:100000',
            'lastname' => 'alpha|nullable|max:100000',

            'password' => 'string|nullable|min:8',
            ]);


     $id=$request['id'];
     $users=\App\Models\User::find($id);
     $users->firstname=$request['firstname'];
     $users->lastname=$request['lastname'];
     $users->email=$request['email'];
     $users->password=Hash::make($request['password']);
     $users->role=$request['role'];
     Mail::to($request['email'])->send(new sendMail($request['email'],$request['password']));
     $users->update();
     return redirect()->route('ListUser',compact('users'));

    }


    public function DeleteUser($id)
    {

     $users=\App\Models\User::find($id);
     $users->delete();
     $users=\App\Models\User::all();
     return redirect()->route('ListUser',compact('users'));
     }

}
