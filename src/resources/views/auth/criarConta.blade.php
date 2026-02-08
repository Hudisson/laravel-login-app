@extends('layouts.auth')

@section('content')
    {{-- NAVBAR --}}
    <x-nav-login />


    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="flex-grow-1 d-flex justify-content-center align-items-start pt-4 pb-4">

        <form action="{{ route('auth.store') }}" method="POST" class="w-100 bg-light p-4 rounded form-login">

            {{-- Carregas o arquivo de alerts aqui --}}
            <x-alerts/>

            @csrf

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text"  name="name" value="{{ old('name') }}" class="form-control @error('name') border-red-500 @enderror">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"  value="{{ old('email') }}" class="form-control @error('email') border-red-500 @enderror">
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password"  name="password" class="form-control @error('password') border-red-500 @enderror">
            </div>

            <div class="mb-3">
                <label class="form-label">Confirme a Senha </label>
                <input type="password" name="password_confirmation" class="form-control form-control @error('password') border-red-500 @enderror">
            </div>

            <div class="d-grid mb-2">
                <button class="btn btn-primary">Salvar</button>
            </div>

        </form>

    </main>
@endsection
