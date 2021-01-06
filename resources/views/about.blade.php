<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CroCoach</title>

    <!-- Styles
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style> -->

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
            <div class="jumbotron" style="margin:2rem; width: 100%; height:100%; background-color:rgb(241, 241, 241); text-align:center;">
                <h1 class="display-4 title title-shadow" style = "font-size:500%;margin-bottom:1%">Looking to improve at chess?</h1>
                <h4 class="display-4 title title-shadow" style = "font-size:250%;margin-bottom: 1%">Feeling stuck in certain situations of the game?</h4>
                <h5 class="display-4 title title-shadow" style = "font-size:200%;margin-bottom: 1%">Want to better your understanding of the game?</h5>
                <h6 class="display-4 title title-shadow" style = "font-size:175%;margin-bottom: 4%">Need some structured guidance?</h6>
                <br>
                <div class = "box" style="margin-left:5%">
                    <div class = "box-fill">
                        <div class = "content">
                            <h2 class = "display-4 meet-me" style="font-weight:600; font-size: 350%">Meet Sandro</h2>
                            <p class = "lead">Computer science student, chess player and chess coach</p>
                            <hr style="border:1px solid white">
                            <p>
                            <h3 class = "meet-me" style="margin-bottom: 2%; color:rgb(18,140,240)"><b> Welcome! </b> </h3>
                            My name is Sandro, I am a 21 year old student from Croatia and<br>
                            I'm here to help <b> YOU </b> improve your chess game! <br><br>
                            It has always been my dream to be able to help people reach their <b>goals</b> which is why <br>
                            I'm thrilled to be able to do so by also sharing my passion! <br> <br>

                            <b class = "meet-me" style="color:rgb(18,140,240)">My mission is to help <b style="font-size:130%">you</b> reach your goals in chess! </b><br><br>

                            Whether your goal is to learn the logic behind the game, enjoy the beauty of the game, <br>
                            Beat a friend or get into tournaments to travel the world - you will reach your goals in no time!
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <img class = "my-image" src="https://i.ibb.co/0mRQR5v/Me2.jpg">
                </div>

                <div style = "margin-top: 50%;text-align:left; margin-left: 5%">
                    <h1 class = "display-4 title" style="margin-bottom:2%;text-decoration:underline" >Credentials</h1>
                    <ul style="font-size:120%;margin:1%">
                        <li>Successfully helped <b>over 100 people from 17 different countries</b> reach their <b>goals</b>
                        <li>Rated <b>2264 ELO</b> at the moment (peak rating)</li>
                        <li><b>Top 1%</b> of players in the Bullet and the Blitz categories on Lichess.org, one of the biggest chess platforms</li>
                        <li>Number 2 in Puzzles (Tactics) for Croatia on Chess.com with <b>over 3200 </b>rating points</li>
                        <li>Former <b>top 10</b> U20 player in Croatia</li>
                        <li>Croatian Junior team chess champion (2019)</li>
                        <li><b>Over 2600</b> rating in Bullet and in Blitz on chess24.com</li>
                        <li><b>Top 10</b> Croatian Bullet chess players on Chess.com</li>
                        <li>Over 35 trophies and 100 medals from real life tournaments, including international ones</li>
                    </ul>
                </div>

                <div>
                    <h1 class = "display-4 title" style="margin:5%; margin-bottom: 1% ;text-decoration:underline; text-align:left;">Testimonials</h1>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>


                    <div class = "slider-area">
                        <div class = "container">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
                                </ol>

                                <div class="carousel-inner">

                                  <div class="carousel-item active">  <!-- First visible item  -->
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Agatti (Italy)</h5>
                                      <p>"Sandro is a phenomenal chess coach. I really enjoyed the first lesson with him. <br>
                                          He delivered so many advices while playing with me, justifying every move he made <br>
                                          and giving ideas and hints on what I should have played, and why. <br><br>
                                          Definitely a very skilled coach and an easy going person, to work with."</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                        <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Lena (USA)</h5>
                                      <p>"Sandro was a great coach. <br>
                                        He walked me through all of my gameplay, where I made mistakes, <br>
                                        and what the most optimal move would have been. <br>
                                        He answered all of my questions about strategy and rules. <br><br>
                                        I would definitely recommend his service! :)"</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Matt (UK)</h5>
                                      <p>"Very friendly and educational. Lesson style was very engaging."</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Jake (USA)</h5>
                                      <p>"Excellent coaching experience throughout our lessons. <br>
                                        Everything was tailored to my pace and needs. <br>
                                        Sandro gave excellent feedback throughout the sessions. <br>
                                        Super knowledgeable, but never felt overwhelmed. <br>
                                        Easy communication. Very happy happy with my order."</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Cody (Canada)</h5>
                                      <p>"Sandro was very professional and very helpful. <br>
                                         He was wonderful to speak with and explained everything logically and made sure I understood everything before continuing."</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Dylan (USA)</h5>
                                      <p>"Super helpful, during and after the session.<br>
                                         Answered any and all questions that I had, <br>
                                         and explained in detail info about any uncertainties that I still had. <br><br>
                                         10/10 would definitely recommend"</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Ola (Sweden)</h5>
                                      <p>"If having chosen my definite coach after one session is wrong, I don't want to be right."</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Ahmed (Saudi Arabia)</h5>
                                      <p>"Sandro is an amazing coach and he is one of the best teachers that I have ever had <br>
                                        and he has an excellent way of explaining chess tactics. <br>
                                        I am very happy with the service and I recommend and I will definitely buy it again."</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <div class="img-area">
                                    <img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Jacques (South Africa) </h5>
                                      <p>"I loved working with Sandro on my game. <br>
                                        I have been stuck at my level for a while and I needed a different perspective on how to improve my game. <br>
                                        Sandro helped me identify the weaknesses in my game and how to go about the thinking of each move. <br>
                                        I've been on a winning streak since. :) Thank you Sandro. <br><br>
                                        If you are on the fence about working with Sandro.... you won't be disappointed."</p>
                                    </div>
                                  </div>

                                </div>
                                 <!-- L/R navigation -->
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                    </div>
                </div>

                <div style = "margin-top:5%; margin-bottom:10%">
                    <p class = "display-4 title" style="margin:0%">Are you ready to transform <b>YOUR</b> chess game?<p>
                    <a class="opt-in-button" href="#" style = "margin-left: -7%; margin-top: 2%;">
                        <span>I'm ready to improve!</span>
                    </a>

                </div>

            </div>
        </div>
    </div>

</body>

</html>
