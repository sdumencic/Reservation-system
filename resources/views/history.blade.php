@push('scripts')
    <script>
        const sliders = document.querySelectorAll('.slide-in');

        const options = {
            threshold: 0,
            rootMargin: "0px 0px -100px 0px"
        };

        const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                } else {
                    entry.target.classList.add("appear");
                    appearOnScroll.unobserve(entry.target);
                }
            });
        }, options);

        sliders.forEach(slider => {
            appearOnScroll.observe(slider);
            console.log(slider);
        });

    </script>
@endpush

<x-app-layout>
    <div style="display:flex; background-color:rgba(179, 179, 179, 0.7);">
        <div class="jumbotron"
            style="margin:2rem; width: 100%; background-color:rgb(241, 241, 241); text-align:center;">
            <h1 class="display-4 title" style="margin-bottom: 7%;">History of chess</h1>
            <div class="container text">
                <div class="row margin20">
                    <div class="col-sm slide-in from-left">
                        The history of chess is almost 1500 years old. The earliest origins are uncertain,
                        but it was probably in India, before the 6th century AD. In India it was called
                        chaturaṅga,
                        which translates as "four divisions of the military". The four divisions were infantry,
                        calary,
                        elephantry and chariotry.
                        These divisions evolved into todays pawn, knight, bishop and rook, respectively.
                        From India, the game spread to Persia.
                        When the Arabs conquered Persia, chess spread to
                        Southern Europe.
                        In Europe, chess evolved into roughly its current form in the 15th century.
                    </div>
                    <div class="col-sm slide-in from-right">
                        <img class="history-slika" src="https://i.ibb.co/jhkxgkS/chaturanga.jpg" alt="chaturanga">
                    </div>
                </div>
                <div class="row margin20">
                    <div class="col-sm slide-in from-left">
                        <img class="history-slika" src="https://i.ibb.co/1sf1Tbn/Shatranj.jpg" alt="Shatranj">
                    </div>
                    <div class="col-sm slide-in from-right">
                        In 6th century the game of chatrang is mensiond in Persian Empire.
                        When Arabs conquered persia, chess spread to the Arab world where the name changed to
                        shatranj.
                        Arabs held tournaments between best chess players.
                        They also studied chess openings.
                        Arabs spread chess to Spain in South Europe.
                    </div>
                </div>
                <div class="row margin20">
                    <div class="col-sm slide-in from-left">
                        In Europe, chess was perfected by the introduction of castling and the increasing
                        activity
                        of the
                        queen and bishop.
                        Todays chess as we know it, originated in 1497 when the first printed work on chess was
                        written by
                        the Spanish chess player Lucena.
                    </div>
                    <div class="col-sm slide-in from-right">
                        <img class="history-slika" src="https://i.ibb.co/QJf11Pq/Schachuhr-mechanisch.jpg"
                            alt="Schachuhr-mechanisch">
                    </div>
                </div>
                <div class="row margin20">
                    <div class="col-sm slide-in from-left">
                        <img class="history-slika"
                            src="https://i.ibb.co/h1CCcJD/19394-4e3bb975-5000x5000o-52f065f76553.jpg"
                            alt="19394-4e3bb975-5000x5000o-52f065f76553">
                    </div>
                    <div class="col-sm slide-in from-right">
                        Competitive chess started in 1834 with La Bourdonnai-McDonnel matches and 1851 London
                        Chess
                        tournament.
                        At that time, five-minute chess also started developing.
                        The most popular version started being the one where each player had a bank of time in
                        which
                        to play
                        a previously agreed number of moves,
                        for example 2 hours for 30 moves. The player who made the predetermined number of moves
                        in
                        the
                        agreed time, received additional time for next moves.
                        The first modern chess tournament was held in London in 1851.
                    </div>
                </div>
                <div class="row margin20">
                    <div class="col-sm slide-in from-left">
                        The first modern chess tournament was held in London in 1851.
                        In 1999 Kasparov as the reigning world champion played a game online against
                        the world team composed of more than 50 000 participants from more than 75 countries.
                        The moves of the world team were decided by the plurality vote and after 62 moves played
                        over four
                        months, Kasparov won the game.
                    </div>
                    <div class="col-sm slide-in from-right">
                        <img class="history-slika" src="https://i.ibb.co/GWfJ3Pk/kasparov.jpg" alt="kasparov">
                    </div>
                </div>
                <div class="row margin20">
                    <div class="col-sm slide-in from-left">
                        <img class="history-slika"
                            src="https://i.ibb.co/z2LNzwG/London-Chess-Classic-2010-Calsen-02.jpg"
                            alt="London-Chess-Classic-2010-Calsen-02">
                    </div>
                    <div class="col-sm slide-in from-right">
                        The current World Chess Champion in Magnus Carlsen from Norway.
                        His highest ELO is 2882 which is the highest rating someone ever had in the history of
                        chess.
                        He got the title of a grandmaster with only 13 years.
                    </div>
                </div>
            </div>

            <h1 class="display-4 title" style="margin-top:-20px; padding:20px">Your journey to becoming a chess
                master awaits</h1>

            <a href="/contact" class="neonbutton-email btn-white" style="padding:2%">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                I'm ready
            </a>
        </div>
</x-app-layout>
