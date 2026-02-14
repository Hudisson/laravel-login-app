@extends('layouts.auth')

@section('content')
    {{-- NAVBAR --}}
    <x-nav-login />

    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="flex-grow-1 d-flex justify-content-center align-items-start pt-4 pb-4">

        <form class="w-100 bg-light p-4 rounded form-login" action="{{ route('login.process') }}" method="POST">

            {{-- Carregas o arquivo de alerts aqui --}}
            <x-alerts />

            @csrf
            @method('POST')

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"  value="{{ old('email') }}" class="form-control @error('email') border-red-500 @enderror">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"  name="password" class="form-control @error('password') border-red-500 @enderror">
            </div>

            <div class="d-grid mb-2 mt-4">
                <button class="btn btn-primary">Entrar</button>
            </div>
            <p class="text-start mb-0 mt-4"> Esqueceu a senha: <a href="#">redefinir senha</a> </p>
        </form>
    </main>
@endsection
