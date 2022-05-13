<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Train Controller - @yield('title')</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        @yield('head-script')
    </head>
    <body>

        {{-- @include('partials.header') --}}

        <main>

            @yield('content')

        </main>
        
        {{-- @include('partials.footer') --}}

    </body>
</html>