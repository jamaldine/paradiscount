<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!--<title>@yield('title', env('APP_NAME') )</title>
       <title>{{isset($title) ? $title.' | '. config('app.name') : config('app.name') }}</title>-->
    <title>{{ pageTitle($title ?? null) }}</title>
</head>

<body>
    @include('layouts/partials/_header')
    @yield('content')
    @include('layouts/partials/_footer')
</body>

</html>