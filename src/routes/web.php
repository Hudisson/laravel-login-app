<?php

use App\Http\Controllers\auth\authLogin;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Rota para página de login
Route::get('/', [authLogin::class, 'login'])->name('login');

// Rota para processar o login
Route::post('/login', [authLogin::class, 'loginProcess'])->name('login.process');

// Rota para a página de cadastro de usuário
Route::get('/criar-conta', [authLogin::class, 'newUser'])->name('new.user');

// Rota para salvar um novo usuário
Route::post('/store-user', [authLogin::class, 'store'])->name('auth.store');

// Grupo de rotas restritas
Route::group(['middleware' => 'auth'], function(){

    // Rota para a página home
    Route::get('/home',[UserController::class, 'index'])->name('user.index');

    // Rota para a página de edição de usuários
    Route::get('/edit-user', [UserController::class, 'edit'])->name('user.edit');

    // Logout
    Route::get('/logout', [authLogin::class, 'logout'])->name('logout');
});


