<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
<header>
    @include('layouts.menu')
</header>
<main>
    @yield('main')
</main>
<footer></footer>
</body>
<scrip src="https://code.jquery.com/jquery-3.2.1.min.js"></scrip>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>