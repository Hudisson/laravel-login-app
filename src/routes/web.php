<?php

use App\Http\Controllers\auth\authLogin;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Rota para página de login
Route::get('/', [authLogin::class, 'login'])->name('auth.login');


// Rota para a página de cadastro de usuário
Route::get('/criar-conta', [authLogin::class, 'newUser'])->name('new.user');

// Rota para salvar um novo usuário
Route::post('/store-user', [authLogin::class, 'store'])->name('auth.store');

// Rota para a página home
Route::get('/home',[UserController::class, 'index'])->name('user.index');
