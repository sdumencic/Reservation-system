<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CroCoach') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js" integrity="sha256-dtGH1XcAyKopMui5x20KnPxuGuSx9Rs6piJB/4Oqu6I=" crossorigin="anonymous" defer></script>
</head>

<body class="bg-light">
    @include('inc.navbar')

    <main class="">
        @include('cookie-consent::index')
        {{ $slot }}
    </main>

    @stack('modals')

    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
