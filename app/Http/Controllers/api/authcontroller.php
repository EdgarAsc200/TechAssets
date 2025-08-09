<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class authcontroller extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('user_name', 'password');

        if(!Auth::attempt($credentials)){
            return response()->json('credenciales incorrectas', 404);
        }

        $user = Auth::user();

        $token = $user->createToken('Api Token')->plainTextToken;


        return response()->json('Token creado correctamente '.$token, 200);
    }
}
