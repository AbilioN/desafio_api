<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticadorControlador extends Controller
{
    public function registrar(Request $request){

            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|',
                'password' => 'required|string|confirmed'
            ]);       
            $cliente = new Cliente([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $cliente->save();

            return response()->json([
                'res' => 'usuario criado com sucesso'
            ],201);
    }

    public function login(Request $request){

        $request->validate([
           
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $credenciais = [
            'email'=> $request->email,
            'password'=> $request->password
        ];


        if(!Auth::attempt($credenciais)){
            return response()->Json([
                'res' => 'acesso negado'
            ],401);
        }

        $cliente = $request->user();
        $token = $cliente->createToken('Token de acesso')->accessToken;

        return response()->Json([
            'token' => $token
            
        ],200);
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'res' =>'deslogado com sucesso'
        ]);
    }
}
