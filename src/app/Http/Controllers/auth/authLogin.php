<?php

namespace App\Http\Controllers\auth;

use App\Http\Requests\UserRequest;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Controllers\Controller;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

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

    // Método responsáve por processa o login
    public function loginProcess(AuthLoginRequest $request)
    {
        // Capturar excessões, se houver
        try{

            // Validar as credencias do usuário com as informação do banco de dados
            $authenticated = Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ]);

            // Verificar se o utilizador foi autenticado
            if(!$authenticated){
                // Redirecionar o usuário, enviar mensagem de erro
                return back()->withInput()->with('error', 'E-mail ou senha inválido!');
            }

            // Redirecionar o usuário para a tela home
            return redirect()->route('user.index')->with('success', 'Bem-vindo(a)!');

        }catch(\Exception $e){
            // Redirecionar o usuário, enviar mensagem de erro
            return back()->withInput()->with('error', 'Usuário não autenticado!');
        }
    }


    // Método para deslogar
    public function logout()
    {
        Auth::logout();

        // Redirecionar o usuário para a tela home
        return redirect()->route('login')->with('logout', 'Sessão encerrada pelo usuário');
    }

}

