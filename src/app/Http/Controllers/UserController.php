<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método responsável por retorna a página home do usuário logado
    public function index()
    {
        return view('home');
    }
}
