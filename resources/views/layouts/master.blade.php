<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>


    {{--  Font awesome  --}}

    <link rel="stylesheet" href="font-awesome/css/all.css">
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
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/slide.css">
    <link rel="stylesheet" href="assets/css/links-1.css">
    <link rel="stylesheet" href="assets/css/categories-list.css">
    <link rel="stylesheet" href="assets/css/pop-products.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>

<body class="bg-dark">

    {{--  L'entete de la page : Contient le logo du site, search et les boutouns utilisateurs comme (login, panier)  --}}
    @yield('header')
    @yield('container')
    @yield('footer')
    <script src="assets/js/headerjs.js"></script>
    <script src="assets/js/slidejs.js"></script>
</body>

</html>
