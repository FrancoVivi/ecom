<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Mes produits vivriers</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/BackToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/album.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tshirt.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" />
</head>

<!-- Back to top button -->
<a id="button"></a>

<body>
    @include('layouts.header')

    @yield('content')

    <footer class="text-light bg-dark py-5">
        <div class="container">



            <p class="mb-1">Mes produits vivriers</p>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.popper.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/holder.min.js') }}"></script>
    <script src="{{ asset('js/BackToTop.js') }}"></script>
</body>

</html>
