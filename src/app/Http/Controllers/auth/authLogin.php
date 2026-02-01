<?php

namespace App\Http\Controllers\auth;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use App\Models\User;

class authLogin extends Controller
{
    // Método que carrega a página de login
    public function login()
    {
        return view('auth/login');
    }

    // Método que carrega página de criar conta
    public function newUser()
    {
        return view('auth/criarConta');
    }

    public function store(UserRequest $request)
    {

        try{

            User::create([

                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,

            ]);

            return redirect()->route('auth.login')->with('success', 'Usuário cadastrado com sucesso!');

        }catch(\Exception $e){

            return back()->withInput()->with('error', 'Usuário não cadastrado');
        }
    }
}
