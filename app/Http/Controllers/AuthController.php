<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReistroRequest;

class AuthController extends Controller
{
    //

    public function register(ReistroRequest $request){

        //validar el registro
        $data  = $request->validated();

        //crear el usuario

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'direction' => $data['direction'],
            'phone' => $data['phone']
        ]);

        //retornar una respuesta

        return[
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];

    }

    public function login(LoginRequest $request){
        $data = $request->validated();

        //Revisar el password

        if(!Auth::attempt($data)){
            return response([
                'errors' => [
                    'El Email o el Password son Incorrectos'
                ]
            ], 422);
        }

        //Autenticar el usuario
        $user = Auth::user();
        return[
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }

    public function logout(Request $request){
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return[
            'user' => null
        ];
    }
}
