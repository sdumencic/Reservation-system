<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CroCoach</title>


    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="margin-bottom:4%; background-color:rgb(241, 241, 241); font-weight:900;">
        <a class="navbar-brand" href="#">CroCoach</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/history">History</a>
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

    <div class="icons">
        <div class="grid-container">
            <div class="grid-item chessicon2"><img class="chessicon chessicon2"
                    src="https://i.ibb.co/VJGKTT2/pijun-white.png" alt="pijun-white"> </div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item chessicon2"><img class="chessicon chessicon2"
                    src="https://i.ibb.co/qnZ415L/knight-white.png" alt="knight-white">
            </div>
            <div class="grid-item chessicon2"><img class="chessicon chessicon2"
                    src="https://i.ibb.co/h7zVVRG/kula-white.png" alt="kula-white">
            </div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item chessicon1"><img class="chessicon chessicon1"
                    src="https://i.ibb.co/9YBZHvx/kula-black.png" alt="kula-black"></div>
            <div class="grid-item chessicon1"><img class="chessicon chessicon1"
                    src="https://i.ibb.co/WFm25yV/queen-black.png" alt="queen-black">
            </div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item chessicon2"><img class="chessicon chessicon2"
                    src="https://i.ibb.co/CBR7CLf/king-white.png" alt="king-white">
            </div>
            <div class="grid-item chessicon2"><img class="chessicon chessicon2"
                    src="https://i.ibb.co/WnhYHLv/queen-white.png" alt="queen-white"></div>
            <div class="grid-item"></div>
        </div>
    </div>

    <div class="slika">

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="grid grid-cols-1 md:grid-cols-2"
                style="display:flex; background-color:rgba(179, 179, 179, 0.7);">
                <div class="jumbotron"
                    style="margin:2rem; width: 100%; background-color:rgb(241, 241, 241); text-align:center;">
                    <h1 class="display-4" style="font-weight:900; color:rgb(22, 66, 83)">CroCoach</h1>
                    <p class="lead">Chess Lessons</p>
                    <hr class="my-4">
                    <a class="btn btn-lg" href="#" role="button"
                        style="background-color:rgb(22, 66, 83); color:white; margin-top:20px;">Learn more</a>
                </div>
                <div style="width:20%; margin: 20px 20px; margin-right: 20%;">
                    <img style="border-radius:20px; margin: 10px 0;" src="https://i.ibb.co/FgR3ptj/crocoach.png">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
