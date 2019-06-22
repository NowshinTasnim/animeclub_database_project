<!DOCTYPE html>
    
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        @include('layouts.partials.admin_header')
        @include('layouts.partials.admin_home')
        @yield('content')
    </body>
</html>