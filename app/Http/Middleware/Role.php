<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class Role
{

    public function handle(Request $request, Closure $next, String $role)
    {
        if (!Auth::check()) // This isnt necessary, it should be part of your 'auth' middleware
        return redirect('/home');

      $user = Auth::user();
      if($user->role == $role)
        return $next($request);

      return redirect('/login');
    }
}
