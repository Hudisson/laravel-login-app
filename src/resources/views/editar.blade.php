@extends('layouts.auth')

@section('content')
    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="flex-grow-1 pt-4 pb-4">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <article class="bg-light p-3 rounded shadow-sm">

                        <x-alerts />

                        {{-- Menu de navegação --}}
                        <x-nav-menu-adm />
                        <hr>

                        <h5 class="title-edit-form">Formulário de edição</h5>

                        {{-- formulário de edição --}}
                        <form class="form w-50 rounded" action="{{ route('user.update', [auth()->user()->id]) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" name="name" value="{{ old('name', auth()->user()->name ) }}"
                                    class="form-control @error('name') border-red-500 @enderror">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email" value="{{ old('email', auth()->user()->email ) }} "
                                    class="form-control @error('email') border-red-500 @enderror" readonly>
                            </div>

                            <div class="d-grid mb-2 mt-4">
                                <button class="btn btn-primary">Salvar</button>
                            </div>
                        </form>

                    </article>

                </div>
            </div>
        </div>
    </main>
@endsection
