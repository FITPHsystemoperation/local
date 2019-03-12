<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'System Support')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/bulma.css') }}">
    <script defer src="{{ asset('./js/fa.js') }}"></script>
</head>

<body class="has-navbar-fixed-top">
    @include('shared.bulma-nav')
        
    <div id="app">
        @yield('content')
    </div>

    <script src="{{ asset('./js/vue.js') }}"></script>
    <script src="{{ asset('./js/my.js') }}"></script>
</body>
</html>