<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hanouti - welcome </title>

    {{--  Import fonts  --}}
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap"
        rel="stylesheet">

    {{--  Goocle icons  --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{--  Default style  --}}
    <link rel="stylesheet" href="assets/css/style.css">

    {{--  Widescreen  --}}
    <link rel="stylesheet" media="screen and (min-width: 1100px)"
        href="assets/css/widescreen.css">

    {{--  Mobile and smartphone  --}}
    <link rel="stylesheet" media="screen and (max-width: 768px)"
        href="assets/css/mobile.css">
</head>

<body>

    {{--  L'entete de la page : Contient le logo du site, search et les boutouns utilisateurs comme (login, panier)  --}}
    <div id="header">
        <div id="logo" class="mxl-3 mxr-1">
            <span class="fs-2">Han<span
                    class="col-primary fs-3">o</span>uti</span>
            <span id="ecommerce" class="myb-1">eCommerce</span>
        </div>
        <div id="search" class="">
            <form action="">
                <select name="" class="search-default category-select px-1 fs-small" >
                    <option value="">Computer</option>
                    <option value="">Fashion</option>
                    <option value="">Sport</option>
                    <option value="">Food</option>
                    <option value="">Music</option>
                    <option value="">Toys</option>
                    <option value="">Others</option>
                </select>
                <input type="text" class="search-default search-text px-1" name="search"
                    placeholder="What are you looking for?">
                <input type="submit" value="Search" class="search-default search-button px-1 fs-small bgcol-primary">
            </form>
        </div>
        <div id="user-setting" class="fs-small">
            <div id="signin" class="mx-1">
                <i class="material-icons mxr-small fs-2">account_circle</i>
                <span>Sign in</span>
            </div>
            <div id="cart" class="mxr-1">
                <i class="material-icons mxr-small fs-2">shopping_cart</i>
                <span>Cart</span>
            </div>
        </div>
    </div>

    {{--  Le menu et l'image d'acceuil du landing page  --}}
    <div id="menu"></div>

    {{--  Le container contient le corps du site (les produits, les pubs, les stores, les posts...)  --}}
    <div id="container"></div>

    {{--  Le footer, c'est le pieds de page  --}}
    <div id="footer"></div>
</body>

</html>
