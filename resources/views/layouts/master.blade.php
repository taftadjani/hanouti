<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>


    {{--  Font awesome  --}}

    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome/scss/font-awesome.scss">
    <script src="assets/js/scripts.js"></script>

    {{--  Import fonts  --}}
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
        rel="stylesheet">

    {{--  Goocle icons  --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{--  Default style  --}}
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-dark">

    {{--  L'entete de la page : Contient le logo du site, search et les boutouns utilisateurs comme (login, panier)  --}}
    @yield('header')
    @yield('container')
    @yield('footer')
</body>

</html>
