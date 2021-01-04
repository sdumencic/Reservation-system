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
            <div class="">
                @auth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @auth
                            <x-jet-dropdown id="navbarDropdown">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img class="rounded-circle" width="32" height="32"
                                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <h6 class="dropdown-header small text-muted">
                                        {{ __('Manage Account') }}
                                    </h6>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif

                                    <!-- Team Management -->
                                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())

                                        <hr class="dropdown-divider">

                                        <h6 class="dropdown-header">
                                            {{ __('Manage Team') }}
                                        </h6>

                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-jet-dropdown-link>
                                        @endcan

                                        <hr class="dropdown-divider">

                                        <!-- Team Switcher -->
                                        <h6 class="dropdown-header">
                                            {{ __('Switch Teams') }}
                                        </h6>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    @endif

                                    <hr class="dropdown-divider">

                                    <x-jet-dropdown-link href="{{ url('/dashboard') }}" class="text-muted">
                                        {{ __('Dashboard') }}
                                    </x-jet-dropdown-link>

                                    <!-- Authentication -->
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-dropdown-link>
                                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @endauth
                    </ul>
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
