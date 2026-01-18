<?php

use App\Http\Controllers\auth\authLogin;
use Illuminate\Support\Facades\Route;



// Rota para da página de login
Route::get('/', [authLogin::class, 'login'])->name('auth.login');
