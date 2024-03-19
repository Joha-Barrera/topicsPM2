<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Models\User;
class UserController extends Controller

{
    public function login(Request $request){
        $credentials=$request->validate([
            'email' => 'email|required',
            'password' => 'required'

        ]);

        if (Auth::attempt($credentials)){
            return redirect('/');

        }

    }
    public function create(Request $request){
        $datosVerifícados = $request->validate([
            'name'=> 'required',
            'email'=>'required|email|unique:users,email',
            'password'=> 'required|min:8',
            'birthday'=> 'required'
        ]);
        if(User::create($datosVerifícados)){
            return redirect('/');
        }

        return back()->withErrors([
            'email'=>'Correo incorrecto',
            'password'=>'No es tu contraseña'
        ]);
    }
}
