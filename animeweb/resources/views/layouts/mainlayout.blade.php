<!DOCTYPE html>
    
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        @include('layouts.partials.logregnav')
        @include('layouts.partials.header')
        @include('layouts.partials.mainnav')
        @yield('content')
    </body>
</html>