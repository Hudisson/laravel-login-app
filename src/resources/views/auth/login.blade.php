@extends('layouts.auth')

@section('content')
    <div class="content">



        {{-- Carregas o arquivo de alerts aqui --}}
        {{-- <x-alert/> --}}

        <div class="form-div">
            
            <form action="#" method="post" class="form-container">
                @csrf

                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="exemplo@email.com"
                        value="{{ old('email') }}"class="form-input @error('email') border-red-500 @enderror">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password"
                        placeholder="digite uma senha com no mínimo 6 caracteres" value="{{ old('password') }}"
                        class="form-input  @error('password') border-red-500 @enderror">
                </div>

                <button type="submit" class="btn-success">Enviar</button>

        </form>
        </div>

    </div>
@endsection
