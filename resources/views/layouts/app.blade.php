<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @yield('meta')
    @include('header.metatags')
    @vite('resources/css/styles.scss')
    @vite('resources/js/files/main.js')
    <link rel="stylesheet" type="text/css" href="/css/styles.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body id="app">
<div class="wrapper">
    @include('header.header')
    <div class="content">
        @yield('content')
    </div>
</div>
@include('footer')
@include('modals')
@vite('resources/js/app.js')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v20.0" nonce="ARdizDdB"></script>
</body>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/libs.js') }}"></script>
</html>
