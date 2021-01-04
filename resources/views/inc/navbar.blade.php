<nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="margin-bottom:4%; background-color:rgb(241, 241, 241); font-weight:900;">
        <a class="navbar-brand" href="/">CroCoach</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link navbar-card" href="/history">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-card" href="/contact">Contact</a>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 sm:block"> {{-- prazna klasa u
                    originalu --}}
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-muted">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-muted">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
