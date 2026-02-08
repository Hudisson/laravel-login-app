<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container justify-content-center">

        {{-- Logo à esquerda --}}
        <a class="navbar-brand logo me-auto" href="{{ route('auth.login') }}">EasyLogin</a>

        {{-- Botão do colapso (mobile) --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Links à direita --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('new.user') }}">Segin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
