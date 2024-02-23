<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('index') }}">
            <img alt="Logo" class="d-inline-block align-text-top" height="30"
                 src="{{ asset('images/favicon.png') }}" width="30">
            FUNKOS 2DAW
        </a>
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"
                data-target="#navbarNav" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route ('home')  }}" class="nav-link">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @endauth
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('funkos.index') }}">Funkos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('funkos.create') }}">Nuevo funko</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="navbar-text">
                        {{ auth()->user()->role ?? 'invitado/a' }}
                    </span>
                </li>
            </ul>
        </div>
    </nav>
</header>
