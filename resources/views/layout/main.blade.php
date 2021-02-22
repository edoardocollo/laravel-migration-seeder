<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titolo_head')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <h1>@yield('titolo')</h1>


    @yield('nav')


    @yield('main')


  </body>
</html>
