<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>NVN</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
        @stack('css')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/logo.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/css/search.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/css/events.css') }}" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        @if (url()->current() != route('user.regist.get') && url()->current() != route('user.login.get'))
            @includeIf('layouts.logo')
        @endif
        @if (url()->current() == route('home'))
            @includeIf('layouts.search')
            @includeIf('layouts.events')
        @endif
        @yield('content')
    </body>
    <script src="/js/app.js"></script>
    @stack('js')
</html>
