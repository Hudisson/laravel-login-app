@extends('layouts.auth')

@section('content')

    {{-- NAVBAR --}}
    <x-nav-login />

    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="flex-grow-1 d-flex justify-content-center align-items-start pt-4 pb-4">

        <form class="w-100 bg-white p-4 rounded form-login">

            {{-- Carregas o arquivo de alerts aqui --}}
            <x-alerts/>

            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input"> <label
                    class="form-check-label">Check me out</label>
            </div>

            <div class="d-grid mb-2">
                <button class="btn btn-primary">Entrar</button>
            </div>
            <p class="text-start mb-0 mt-2"> Esqueceu a senha: <a href="#">redefinir senha</a> </p>
        </form>
    </main>

@endsection
