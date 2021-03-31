<x-app-layout>
    @push('scripts')
    <script>
        let bg = document.getElementById("bg");
        let moon = document.getElementById("moon");
        let about = document.getElementById("about");

        console.log(bg);

        window.addEventListener('scroll', function() {
            var value = window.scrollY;
            console.log(bg);

            if(value > 10) {

            bg.style.top = value * 0.7 + 'px';
            moon.style.top = -value * 0.4 + 'px';
            //about.style.top = value * 0.1 + 'px';
            }
        })
    </script>
@endpush
    {{-- <div class="icons">
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
    </div> --}}



        <div class ="parallax">
            <img class ="parallax-img" id="bg" src="https://i.ibb.co/4g8N9yt/chess.png" alt="chess">
            <img class ="object-fit" id="moon" src="https://i.ibb.co/dmWbH6P/210112-chess.png" alt="210112-chess">
            <div class ="parallax-about glass-effect" id="about">
                <p class="crocoach">CroCoach</p>
            </div>
        </div>

        <div>
            <div
                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <div class="grid grid-cols-1 md:grid-cols-2 jumbotron-welcome">
                    <div class="jumbotron"
                        style="margin:2rem; width: 100%; background-color:rgb(241, 241, 241); text-align:center;">
                        <h1 class="display-4 title-shadow" style="font-weight:900; color:rgb(22, 66, 83)">Interested in chess lessons?</h1>
                        <p class="lead">Welcome to my coaching page! <br>
                        My name is Sandro and I want to help you improve <br><br>


                        Find out what makes me the perfect fit for your chess game!
                        </p>
                        <hr class="my-4">
                        <a class="btn btn-lg" href="/about" role="button"
                            style="background-color:rgb(22, 66, 83); color:white; margin-top:20px;">Meet Sandro</a>
                    </div>
                    <div style="width:20%; margin: 20px 20px; margin-right: 20%;">
                        <img class="img-welcome" src="https://i.ibb.co/FgR3ptj/crocoach.png">
                    </div>
                </div>
            </div>

        <h1 class="testimonials title-shadow">Featured testimonials</h1>
        <div class="testimonials-f">
            <div class="row">
                <div class="col-md-12">
                    <div class="row testimonials-height" style = "margin-bottom: 50px">
                        <div class="col">
                            <div class="single-box testimonials-card">
                                <div class="img-area" style = "width: 50%; height: auto; border-radius: 10%; margin-bottom: 50px"><img src="https://i.ibb.co/9VyXd5Z/Testimonial-image-Evan.jpg" class="d-block w-100" alt="Testimonial_Image_1"></div>
                                <div class="img-text">
                                    <h2>Evan (USA)</h2>
                                    <p class="testimonials-comment">"When it comes to chess coaches, Sandro was hands down the go-to for me.
                                        I was nervous about finding a chess coach at first, wondering if this type of investment was for me.
                                        However, after several months, if not years, of being stuck at my old peak I knew it was time for change
                                        if I wanted to see some serious gains in my playing abilities.<br><br>

                                        I first found Sandro on Fiverr, and while they are still my coach,
                                        I believe Sandro to be a mentor / friend who seeks to help you push past your current barriers.
                                        I was stuck at around 1750 before running into Sandro, and now I currently sit at 1930 and am still seeing improvements.
                                        Without them, I would still be making the same mistakes and wouldn't see the improvements I have had thus far.<br><br>

                                        I owe a lot of my progress to Sandro for not only taking the time to create personal studies for me based on my openings,
                                        (The French Defense and the English Opening), but for helping me spot tactics, middle game ideas, and being better prepared for the end game.
                                        And while I still have a lot of room to improve, I think Sandro will continue to help me achieve my personal goals in the game.<br><br>

                                        Here's to creating new goals in the future, and here's to improving with Sandro as my teacher.

                                        They truly know what they are doing, and for that, I'm thankful. He has made all of my mistakes already, so I don't have to.
                                        They will truly help you push yourself to new frontiers in your chess."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-box testimonials-card">
                                <div class="img-area" style = "width: 50%; height: auto; border-radius: 10%; margin-bottom: 50px"><img src="https://i.ibb.co/qj7T1fV/Testimonial-image-Drew.jpg" class="d-block w-100" alt="Testimonial_Image_2"></div>
                                <div class="img-text">
                                    <h2>Drew (USA)</h2>
                                    <p class="testimonials-comment">"Sandro and I began doing lessons at
                                        the beginning of 2020 and I've seen massive jumps in my rating
                                        and strength, OTB and online. <br><br>
                                        Not only is he a very strong player, but also a
                                        very patient and thoughtful coach.<br><br>
                                        He has many interactive studies which were extremely helpful - if
                                        there was a problem I had on the board,
                                        Sandro had or even created a study to help me.<br><br>
                                        I started around 1300-1400 (chess.com) with Sandro and over a
                                        period of around a year with a good amount of study and
                                        coaching, I am around 1900 now and have even beat a handful of 2000+ rated players.<br><br>
                                        If you want to improve, I have no doubts Sandro can help your
                                        sticking points in chess."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-box testimonials-card">
                                <div class="img-area" style = "width: 50%; height: auto; border-radius: 10%; margin-bottom: 50px"><img src="https://i.ibb.co/74Yd1zY/Anonymous-image.png" class="d-block w-100" alt="Testimonial_Image_3"></div>
                                <div class="img-text">
                                    <h2>Cameron (USA)</h2>
                                    <p class="testimonials-comment">"Sandro is a chess prodigy. <br>So far
                                        we have completed only 1 session, but I plan on continuing with
                                        him.<br>
                                        He identified my gameplay and made proper corrections that are
                                        very SIMPLE to learn.<br><br>
                                        As an American I was concerned there would be a language
                                        barrier, but his english is A+++++.<br><br>
                                        I know for a fact my chess will improve with Sandro. <br>
                                        He is attentive, kind and a wonderful teacher.<br>
                                        I am very pleased."
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
