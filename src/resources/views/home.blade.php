@extends('layouts.auth')

@section('content')
    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="flex-grow-1 pt-4 pb-4">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <article class="bg-light p-4 rounded shadow-sm">

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
                                            <a href="#" class="nav-link">Editar</a>
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


                        <p class="text-muted mb-4">
                            Área restrita
                        </p>

                        <hr>

                        <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-light">
                                <strong>Perfil</strong>
                            </div>

                            <div class="card-body">
                                <p class="mb-2">
                                    <strong>Nome:</strong> {{ auth()->user()->name }}
                                </p>

                                <p class="mb-2">
                                    <strong>E-mail:</strong> {{ auth()->user()->email }}
                                </p>

                                <p class="mb-2">
                                    <strong>Data de cadastro:</strong>
                                    {{ auth()->user()->created_at->format('d/m/Y') }}

                                </p>

                                <p class="mb-0">
                                    <strong>Última atualização:</strong>
                                    {{ auth()->user()->updated_at->format('d/m/Y H:i') }}

                                </p>
                            </div>
                        </div>

                        <p>
                            Bem-vindo à área restrita do sistema.
                        </p>

                    </article>

                </div>
            </div>
        </div>
    </main>
@endsection
