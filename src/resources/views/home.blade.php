@extends('layouts.auth')

@section('content')

    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="flex-grow-1 pt-4 pb-4">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <article class="bg-light p-4 rounded shadow-sm">

                        <x-alerts />

                        {{-- MENU DE NAVEGAÇÃO --}}
                        <x-nav-menu-adm />

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
