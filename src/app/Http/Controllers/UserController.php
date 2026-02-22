<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método responsável por retornar a página home do usuário logado
    public function index()
    {
        return view('home');
    }

    // Método responsável por retornar a página para editar os dados de um usuário logado
    public function edit()
    {
        return view('editar');
    }
}
