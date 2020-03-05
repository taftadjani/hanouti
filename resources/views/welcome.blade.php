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
                <select name=""
                    class="search-default category-select px-1 fs-small">
                    <option value="">Computer</option>
                    <option value="">Fashion</option>
                    <option value="">Sport</option>
                    <option value="">Food</option>
                    <option value="">Music</option>
                    <option value="">Toys</option>
                    <option value="">Others</option>
                </select>
                <input type="text" class="search-default search-text px-1"
                    name="search" placeholder="What are you looking for?">
                <input type="submit" value="Search"
                    class="search-default search-button px-1 fs-small bgcol-primary">
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

    {{--  Le background d'acceuil du landing page  --}}
    <div id="bg-welcome" class="myt-1"></div>

    {{--  Le container contient le corps du site (L'image front dulanding page, les produits, les pubs, les stores, les posts...)  --}}
    <div id="container" class="">
        <div id="front-welcome">
            <i></i>
            <div></div>
            <div></div>
            <i></i>
        </div>
        <div id="pop-cat" class="myt-3 fs-2">
            <div id="pop-cat-title" class="px-2 pyt-1">
                <span class="fs-2 fw-b">
                    <a href="#" class="col-black">POPULARS CATEGORIES</a>
                </span>
            </div>
            <div id="pop-cat-items" class="myt-2">
                <div class="item bgcol-white">

                </div>
                <div class="item bgcol-white">

                </div>
                <div class="item bgcol-white">

                </div>
                <div class="item bgcol-white">

                </div>
                <div class="item bgcol-white">

                </div>
                <div class="item bgcol-white">

                </div>
                <div class="item bgcol-white">

                </div>
            </div>
        </div>
        <div id="stores-around">
            <div id="stores-around-title" class="px-2">
                <span class="fs-2 fw-b">
                    <a href="#" class="col-black">DISCOVER STORES AROUND</a>
                </span>
            </div>
            <div id="stores-around-items" class="myt-1">
                <div class="store bgcol-primary">
                    <div class="store-img">Imags</div>
                    <div class="store-desc">sALUT</div>
                </div>
                <div class="store bgcol-primary">
                    <div class="store-img"></div>
                    <div class="store-desc"></div>
                </div>
                <div class="store bgcol-primary">
                    <div class="store-img"></div>
                    <div class="store-desc"></div>
                </div>
                <div class="store bgcol-primary">
                    <div class="store-img"></div>
                    <div class="store-desc"></div>
                </div>
                <div class="store bgcol-primary">
                    <div class="store-img"></div>
                    <div class="store-desc"></div>
                </div>
            </div>
        </div>

        <div class="pop-prod">
            <div id="pop-prod-title" class="px-2 myt-3">
                <span class="fs-2 fw-b">
                    <a href="#" class="col-black">POPULARS PRODUCTS</a>
                </span>
            </div>
            <div class="pop-prod-items myt-1">
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
            </div>

        </div>
        <div class="pop-prod myt-1">

            <div class="pop-prod-items" class="myt-1">
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
                <div class="prod bgcol-primary">
                    <div class="prod-img">Imags</div>
                    <div class="prod-desc">sALUT</div>
                </div>
            </div>

        </div>
        <div class="pub-post myt-2 bgcol-white"></div>
        <div class="rec-prod">
            <div id="rec-prod-title" class="px-2 myt-3">
                <span class="fs-2 fw-b">
                    <a href="#" class="col-black">PRODUCTS RECOMMENDATIONS</a>
                </span>
            </div>
            <div class="rec-prod-items myt-1">
                <div class="rec bgcol-primary">
                    <div class="rec-img">Imags</div>
                    <div class="rec-desc">sALUT</div>
                </div>
                <div class="rec bgcol-primary">
                    <div class="rec-img">Imags</div>
                    <div class="rec-desc">sALUT</div>
                </div>
                <div class="rec bgcol-primary">
                    <div class="rec-img">Imags</div>
                    <div class="rec-desc">sALUT</div>
                </div>
                <div class="rec bgcol-primary">
                    <div class="rec-img">Imags</div>
                    <div class="rec-desc">sALUT</div>
                </div>
                <div class="rec bgcol-primary">
                    <div class="rec-img">Imags</div>
                    <div class="rec-desc">sALUT</div>
                </div>
            </div>

        </div>
        <div class="something-else myt-2 bgcol-white"></div>
    </div>

    {{--  Le footer, c'est le pieds de page  --}}
    <div id="footer" class="bgcol-white myt-1">
        <div id="footer-top" class=""></div>
        <div id="footer-bottom"></div>
    </div>
</body>

</html>
