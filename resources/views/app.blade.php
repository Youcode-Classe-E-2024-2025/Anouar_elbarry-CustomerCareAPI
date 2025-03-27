<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/js/app.js'])
        <!-- Fonts -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="antialiased">
        <div id="app">
        <router-view name="navbar"></router-view>
        <router-view></router-view>
        <router-view name="footer"></router-view>
        </div>
    </body>
</html>
