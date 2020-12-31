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

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="margin-bottom:4%; background-color:rgb(241, 241, 241); font-weight:900;">
        <a class="navbar-brand" href="./..">CroCoach</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./..">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/history">History</a>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>



    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        {{--@if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
            </div>
        @endif--}}

        <div class="grid grid-cols-1 md:grid-cols-2"
            style="display:flex; background-color:rgba(179, 179, 179, 0.7);">

            <div class="jumbotron" style="margin:2rem; width: 100%; background-color:rgb(241, 241, 241); text-align:center;">
                <h1 class="display-4 title">Contacts</h1>
                <p class="lead" style="font-size: 150%">Feel free to contact me with any questions!</p>
                <hr class="my-4">

                <div class="card" style="float:left;  margin-left: 22%; margin-right: 5%;  width: 15%; height:80%">
                    <img class="card-img-top" style="padding: 10%; padding-top: 10%; padding-bottom:5%" src="https://i.ibb.co/rFJQtLm/Fiverr.jpg" alt="Fiverr image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:200%"><b>Fiverr</b></h5>
                        <p class="card-text" style="font-size:110%; padding-bottom:10%">Main page with reviews</p>

                        <a href="https://www.fiverr.com/sandro970/provide-high-quality-chess-lessons" class="neonbutton-fiverr">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Contact through Fiverr
                        </a>
                    </div>
                </div>

                <div class="card" style="float:left; margin-right: 5%;  width: 15%; height:80%">
                    <img class="card-img-top" style="padding: 10%; padding-top: 10%; padding-bottom:5%" src = "https://i.ibb.co/QbND4rF/Discord.png" alt="Discord image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:200%"><b>Discord</b></h5>
                        <p class="card-text" style="font-size:110%; padding-bottom:10%">Sandro970#4008</p>

                        <a href="https://discord.gg/jfMU9gQ2y7" class="neonbutton-discord">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Contact through Discord
                        </a>
                    </div>
                </div>

                <div class="card" style="float:left; margin-right: 5%; width: 15%; height:80%">
                    <img class="card-img-top" style = "padding: 10%; padding-top: 10%; padding-bottom:5%" src="https://i.ibb.co/3sVVrJr/Email.png" alt="E-mail image">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:200%"><b>E-mail</b></h5>
                        <p class="card-text" style="font-size:110%; padding-bottom:10%">sandrosafar@hotmail.com</p>

                        <a href="mailto:sandrosafar@hotmail.com" class="neonbutton-email">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Contact through e-mail
                        </a>
                    </div>
                </div>



                <!-- Personal Fiverr badge start

                <div itemscope itemtype='http://schema.org/Person' class='fiverr-seller-widget' style='display: inline-block; float:right; padding-right:150px'>
                    <a itemprop='url' href=https://www.fiverr.com/sandro970 rel="nofollow" target="_blank" style='display: inline-block;'>
                    <div class='fiverr-seller-content' id='fiverr-seller-widget-content-e8a7bef8-8368-470d-9960-949593747a1c' itemprop='contentURL' style='display: none;'></div>
                    <div id='fiverr-widget-seller-data' style='display: none;'>
                        <div itemprop='name' >sandro970</div>
                        <div itemscope itemtype='http://schema.org/Organization'><span itemprop='name'>Fiverr</span></div>
                        <div itemprop='jobtitle'>Seller</div>
                        <div itemprop='description'>Welcome!

                I am a 21 year old Croatian semi-professional chess player and coach (rated over 2250) looking to share my knowledge.

                Except chess, my skills include gaming skills (League of Legends, Rocket League, CS:GO) as well as fluent English.

                Also good at coding (Python, Java, C and C++).

                I would like to share those skills to benefit both of us! :)</div>
                    </div>
                </a>
                </div>

                <script id='fiverr-seller-widget-script-e8a7bef8-8368-470d-9960-949593747a1c' src='https://widgets.fiverr.com/api/v1/seller/sandro970?widget_id=e8a7bef8-8368-470d-9960-949593747a1c' data-config='{"category_name":"Lifestyle"}' async='true' defer='true'></script>

                    Personal Fiverr badge end
                <h5 style= "float:right; padding-left:50px; padding-right:400px; padding-top: 100px">  📱: +385 91 323 2334 <br> <br> </h5>
                <h5 style ="float:right; padding-left:100px; padding-right:300px">📧: sandrosafar@hotmail.com </h5> -->
            </div>
        </div>
    </div>
</body>

</html>
