<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>@yield('title', env('APP_NAME') )</title>
    </head>
    <body>
        @yield('content')
        <footer>
        <div class="text-pink-500 hover:text-pink-600 underline">copyright</div>
        @if(Route::is('home'))
        <a href={{route('details')}}>details</a>
        @endif
        </footer>
    </body>
</html>
