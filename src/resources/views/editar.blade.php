@extends('layouts.auth')

@section('content')
    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="flex-grow-1 pt-4 pb-4">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <article class="bg-light p-3 rounded shadow-sm">

                        <x-alerts />

                        <nav class="navbar  navbar-light bg-light navbar-expand-lg mb-4">
                            <div class="container">

                                {{-- Logo --}}
                                <a class="navbar-brand fw-bold" href="#">
                                    {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo" height="32" class="me-2"> --}}
                                    <h1 class="mb-2">LaravelApp</h1>
                                </a>

                                {{-- Botão mobile --}}
                                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#userMenu">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                {{-- Menu --}}
                                <div class="collapse navbar-collapse" id="userMenu">
                                    <ul class="navbar-nav ms-auto nav nav-pills gap-2">

                                        <li class="nav-item">
                                            <a href="{{ route('user.index') }}" class="nav-link active">Perfil</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('user.edit') }}" class="nav-link">Editar</a>
                                        </li>

                                        <li class="nav-item">
                                            <form method="GET" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="nav-link btn btn-link text-danger p-2">
                                                    Sair
                                                </button>
                                            </form>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <hr>

                        <style>
                            .form {
                                margin-left: 255px;
                            }
                            .title-edit-form{
                                text-align: center
                            }
                        </style>

                        <h5 class="title-edit-form">Formulário de edição</h5>

                        {{-- formulário de edição --}}
                        <form class="form w-50 rounded" action="" method="POST">

                            @csrf
                            @method('POST')

                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') border-red-500 @enderror">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') border-red-500 @enderror">
                            </div>

                            <div class="d-grid mb-2 mt-4">
                                <button class="btn btn-primary">Entrar</button>
                            </div>
                        </form>

                    </article>

                </div>
            </div>
        </div>
    </main>
@endsection
