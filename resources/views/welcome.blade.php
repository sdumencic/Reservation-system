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
                        <p class="lead">Welcome to my chess page! I am Sandro and I want to help you with your chess.
                            Find out what makes me the perfect fit for your chess game.
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

        <h1 class="testimonials title-shadow">Testimonials</h1>
        <div class="testimonials-f">
            <div class="row">
                <div class="col-md-12">
                    <div class="row testimonials-height">
                        <div class="col">
                            <div class="single-box testimonials-card">
                                <div class="img-area"><img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                <div class="img-text">
                                    <h2>Person one</h2>
                                    <p class="testimonials-comment">"Sandro and I began doing lessons at
                                        the beginning od 2020 and I've seen massive jumps in my rating
                                        and strength,
                                        OTB and online. Not only is he a very strong player, but also a
                                        very patient and thoughtful coach.
                                        He has many interactive studies which were extremly helpful - if
                                        there was a problem I had on the board,
                                        Sandro had or even created a study to help me.
                                        I started around 1300-1400 (chess.com) with Sandro and over a
                                        period of around a year with a good amount of study and
                                        coaching,
                                        I am around 1900 now and have even beat a handful of 2000+ rated
                                        players.
                                        If you want to improve, I have no doubts Sandro can help your
                                        sticking points in chess."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-box testimonials-card">
                                <div class="img-area"><img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                <div class="img-text">
                                    <h2>Person 2</h2>
                                    <p class="testimonials-comment">"Sandro is a chess prodigy. So far
                                        we have completed only 1 session, but I plan on cintinuing with
                                        him.
                                        He identified my gameplay and made proper corrections that are
                                        very SIMPLE to learn.
                                        As an American I was concerned there would be a language
                                        barrier, but his english is A+++++.
                                        I know for a fact my chess will improve with Sandro. He is
                                        attentive, kind and a wonderful teacher.
                                        I am very pleased."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-box testimonials-card">
                                <div class="img-area"><img src="https://i.ibb.co/DYPV4Cd/anonymous-user-gravatar-0.png" class="d-block w-100" alt="..."></div>
                                <div class="img-text">
                                    <h2>Person 3</h2>
                                    <p class="testimonials-comment">"This was my first Fiverr purchase.
                                        While I've studied a bit by myself, I found myself stuck and
                                        unsure of what to do next.
                                        However, Sandro completely helped me point out some of my major
                                        issues, things I need to improve on, and so forth.
                                        His reviews are 100% true, as everything was a positive
                                        experience!
                                        Clear communication, reached out to me and was able to send
                                        instructions via Discord (my preferred platform).
                                        He is a strong player, and I look forward to more lessons to
                                        help reach my goals.
                                        Thank you again, Sandro, for your help and sharing your
                                        knowledge.
                                        I'mm looking forward to our future lessons.
                                        If you're looking for quality, I recommend Sandro."
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
