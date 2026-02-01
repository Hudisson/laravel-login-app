<?php

use App\Http\Controllers\auth\authLogin;
use Illuminate\Support\Facades\Route;



// Rota para página de login
Route::get('/', [authLogin::class, 'login'])->name('auth.login');

Route::get('/criar-conta', [authLogin::class, 'newUser'])->name('new.user');

// Rota para salvar um novo usuário
Route::post('/store-user', [authLogin::class, 'store'])->name('auth.store');
