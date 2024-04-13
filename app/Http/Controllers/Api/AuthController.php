<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = $request->user();


            return response()->json(['user' => $user]);
        } else {
            return response()->json(['message' => 'Login et Password inncorrecte'], 401);
        }
    }

    public function refreshToken(Request $request)
    {
        if ($request->has('user_id')) {
            $user = \App\Models\User::find($request->user_id);
            if ($user) {
                $user->device_token = $request->new_token;
                $user->save();
                return response()->json(['success' => true, 'message' => 'updated_ successfully !']);
            }
        }
        return response()->json(['success' => false, 'message' => 'user_id not found']);
    }
}
