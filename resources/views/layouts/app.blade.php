<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('include.head')
    </head>
    <body>
        <div id="app">
            @include('include.navbar')
            <div class="container">
                @include('include.messages')
                @yield('content')
            </div>
        </div>
        @include('include.js')
    </body>
</html>