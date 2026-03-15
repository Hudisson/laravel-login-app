{{-- Menu de navegação --}}
<nav class="navbar  navbar-light bg-light navbar-expand-lg mb-4">
    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand fw-bold" href="#">
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo" height="32" class="me-2"> --}}
            <h1 class="mb-2">LaravelApp</h1>
        </a>

        {{-- Botão mobile --}}
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#userMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="userMenu">
            <ul class="navbar-nav ms-auto nav nav-pills gap-2">

                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">Perfil</a>
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

<p class="text-muted mb-4">
    Área restrita
</p>
