<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'System Support')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body class="has-navbar-fixed-top">
    @include('shared.bulma-nav')

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.7/dist/vue.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>