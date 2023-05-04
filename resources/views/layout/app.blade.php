{{-- layout base per le varie pagine --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('page-title')</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        @include('layout.partials.header')
        @yield('main')
    </body>
</html>
