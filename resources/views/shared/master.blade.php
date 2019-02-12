<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
    <!-- Bootstrap CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <title>@yield('title', 'System Support')</title>
  </head>
  
  <body>
    @include('shared.nav')

    @yield('content')

    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('js/popper.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  </body>
</html>