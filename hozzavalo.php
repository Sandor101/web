<?php
$arrAlap = array(1000,1100,940,220,340,500,290,900,300,870,480,185,260,190,180,100,110,270,310,1200,1250,950,500,330,600,230,2500,550,450,1350,800,680,450,1100,100,1800,2400,610,780,1550,675,1120);
$hozzList = array("paradicsom (1 kg)","cukkini (1kg)","kígyóuborka (1 kg)","vöröshagyma (500g)","lilahagyma (500g)","csemege uborka (Huangro - 720g)","olajbogyó (Giana - 200g)","fokhagyma (500g)","Kaliforniai piros paprika (200g)","Avokádó (260g)","Spenót (Eisberg - 80g)","só (Konyha finom - 1 kg)","cukor (Koronás cukor - 1 kg)","liszt (Kunsági - 1 kg)","őrölt feketebors (Horváth Rozi - 20g)","bazsalikom (Horváth Rozi - 5g)","őrölt kömény (Horváth Rozi - 20g)","fokhagyma-granulátum (Kotányi - 20g)","őrölt szegfűszeg (Kotányi - 20g)","ketchup (Heinz - 460g)","majonéz (Heinz - 460ml)","mustár (Heinz - 445g)","fűszerpaprika (csípős, Kotányi, 50g)","Tikka masala fűszerkeverék (30g)","Sniding (20g)","Citrom (200g)","Ételízesítő (Vegeta - 1 kg)","szójaszósz (Kofa - 170g)","Citromlé (Olympos - 1l)","Koriander (1 csokor - 100g)","Étkezési lencse (1 kg)","Rukkola (1 doboz - 100g)","Cékla (1kg)","Csicseriborsó (500g)","Kapor (20g)","Kecskesajt (P180g)","Parmezán sajt (200g)","Olaj (Kunsági - 1l)","Tojás (Farm Tojás - 10 db)","Gomba (1 kg)","Rizs (Nagykun - 1 kg)","Alaplé (STAR - 1l)");
$valaszList = array (
    array($hozzList[0],$arrAlap[0]),
    array($hozzList[1],$arrAlap[1]),
    array($hozzList[2],$arrAlap[2]),
    array($hozzList[3],$arrAlap[3]),
    array($hozzList[4],$arrAlap[4]),
    array($hozzList[5],$arrAlap[5]),
    array($hozzList[6],$arrAlap[6]),
    array($hozzList[7],$arrAlap[7]),
    array($hozzList[8],$arrAlap[8]),
    array($hozzList[9],$arrAlap[9]),
    array($hozzList[10],$arrAlap[10]),
    array($hozzList[11],$arrAlap[11]),
    array($hozzList[12],$arrAlap[12]),
    array($hozzList[13],$arrAlap[13]),
    array($hozzList[14],$arrAlap[14]),
    array($hozzList[15],$arrAlap[15]),
    array($hozzList[16],$arrAlap[16]),
    array($hozzList[17],$arrAlap[17]),
    array($hozzList[18],$arrAlap[18]),
    array($hozzList[19],$arrAlap[19]),
    array($hozzList[20],$arrAlap[20]),
    array($hozzList[21],$arrAlap[21]),
    array($hozzList[22],$arrAlap[22]),
    array($hozzList[23],$arrAlap[23]),
    array($hozzList[24],$arrAlap[24]),
    array($hozzList[25],$arrAlap[25]),
    array($hozzList[26],$arrAlap[26]),
    array($hozzList[27],$arrAlap[27]),
    array($hozzList[28],$arrAlap[28]),
    array($hozzList[29],$arrAlap[29]),
    array($hozzList[30],$arrAlap[30]),
    array($hozzList[31],$arrAlap[31]),
    array($hozzList[32],$arrAlap[32]),
    array($hozzList[33],$arrAlap[33]),
    array($hozzList[34],$arrAlap[34]),
    array($hozzList[35],$arrAlap[35]),
    array($hozzList[36],$arrAlap[36]),
    array($hozzList[37],$arrAlap[37]),
    array($hozzList[38],$arrAlap[38]),
    array($hozzList[39],$arrAlap[39]),
    array($hozzList[40],$arrAlap[40]),
    array($hozzList[41],$arrAlap[41]),
);
$valasures = array ();


?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="hozzavalo.css">
    <link rel="stylesheet" href="hozzareset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <title>Hozzávalók</title>
    <style>
    .todoBlock {
        background-color: #097fb7;
    }

    body {
        background-image: url(image/kep03.jpg);
        text-align: center;
        color: black;
    }

    #myInput {
        width: 50%;
        /* Full-width */
        font-size: 16px;
        /* Increase font-size */
        padding: 12px 20px 12px 40px;
        /* Add some padding */
        border: 1px solid #ddd;
        /* Add a grey border */
        margin-bottom: 22px;
        /* Add some space below the input */
    }

    #myUL {
        /* Remove default list styling */
        list-style-type: none;
        padding: 12px 20px 12px 40px;
        width: 54.7%;
        margin-left: 275px;
        border: 1px;

    }

    #myUL li a {
        border: 1px solid #ddd;
        /* Add a border to all links */

        margin-top: -1px;
        /* Prevent double borders */
        background-color: #f6f6f6;
        /* Grey background color */
        padding: 7px;
        /* Add some padding */
        text-decoration: none;
        /* Remove default text underline */
        font-size: 18px;
        /* Increase the font-size */
        color: black;
        /* Add a black text color */
        display: block;
        /* Make it into a block element to fill the whole list */
    }

    #myUL li a:hover:not(.header) {
        background-color: #eee;
        /* Add a hover effect to all links, except for headers */
    }

    .custom-select-lg {
        width: 49px;
        height: 40px;
        border-radius: 20%;
        margin-right: 8px;
    }

    /*li utáni div */
    .center {
        display: inline-flex;


    }

    /*span megjelenő click után */
    .dot {
        height: 14px;
        width: 14px;
        background-color: green;
        border-radius: 50%;
        position: absolute;
        left: 67%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 8px;
        color: #fff;
        opacity: 0
    }

    .cart-button:focus {
        box-shadow: none
    }

    /*icon */
    .cart {
        height: 40px;
        width: 40px;
        margin-left: 8px;
        background-color: #fff;
        padding: 11px;
        border-radius: 10px;
        cursor: pointer;
        transition: opacity 1s;
        display: inline-grid;
    }

    .cart:hover {
        opacity: 0.7;
    }

    .cart-button.clicked span.dot {
        animation: item 0.3s ease-in forwards
    }

    @keyframes item {
        0% {
            opacity: 1;
            top: 30%;
            right: 30%
        }

        25% {
            opacity: 1;
            right: 26%;
            top: 0%
        }

        50% {
            opacity: 1;
            right: 23%;
            top: -22%
        }

        75% {
            opacity: 1;
            right: 19%;
            top: -18%
        }

        100% {
            opacity: 1;
            right: 14%;
            top: 28%
        }
    }

    .kos {
        background-color: white;
        font-size: 23px;
    }

    .butRes {
        background-color: aqua;
        border-radius: 20px;
        height: 50px;
        width: 50px;
        cursor: pointer;
        transition: opacity 1s;
    }

    .butsend {
        background-color: aqua;
        border-radius: 10px;
        height: 50px;
        width: 100px;
        cursor: pointer;
        transition: opacity 1s;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="fo.html">Vegetár</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="recept.html">Receptek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Bejelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Regisztráció</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rendeles.php">Rendelés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kapcs.html">Kapcsolat</a>
                    </li>
                </ul>
            </div>
    </nav>

    <h2>Hozzávalók</h2>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Kereső">

    <div class="kos">
        <p>Kosár tartalma</p><br>
        <form method="post">
            <div id="shopping"></div>
            <button class="butRes" type="button" onclick="resetList()"><i class="fa fa-trash"></i></button>
            <input class="butsend" type="submit" name="Kosar" value="Kosar"></input>

        </form>

    </div>
    <ul id="myUL">
        <li><a class="listName">paradicsom (1 kg) 1000 Ft
                <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button"
                            onclick='add2array("paradicsom (1 kg)")'><i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>cukkini (1kg) 1100 Ft
                <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("cukkini (1kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a class="item_h">kígyóuborka (1 kg) 940 Ft
                <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("kígyóuborka (1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a class="item_h">vöröshagyma (500g) 220 Ft
                <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("vöröshagyma (500g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>lilahagyma (500g) 340 Ft
                <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("lilahagyma (500g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>

        <li><a>csemege uborka (Huangro - 720g) 500 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("csemege uborka (Huangro - 720g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>olajbogyó (Giana - 200g) 290 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("olajbogyó (Giana - 200g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>fokhagyma (500g) 900 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("fokhagyma (500g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Kaliforniai piros paprika (200g) 300 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Kaliforniai piros paprika (200g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Avokádó (260g) 870 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Avokádó (260g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Spenót (Eisberg - 80g) 480 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Spenót (Eisberg - 80g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>só (Konyha finom - 1 kg) 185 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("só (Konyha finom - 1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>cukor (Koronás cukor - 1 kg) 260 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("cukor (Koronás cukor - 1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>liszt (Kunsági - 1 kg) 190 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("liszt (Kunsági - 1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>őrölt feketebors (Horváth Rozi - 20g) 180 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("őrölt feketebors (Horváth Rozi - 20g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>bazsalikom (Horváth Rozi - 5g) 100 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("bazsalikom (Horváth Rozi - 5g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>őrölt kömény (Horváth Rozi - 20g) 110 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("őrölt kömény (Horváth Rozi - 20g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>fokhagyma-granulátum (Kotányi - 20g) 270 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("fokhagyma-granulátum (Kotányi - 20g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>őrölt szegfűszeg (Kotányi - 20g) 310 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("őrölt szegfűszeg (Kotányi - 20g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>ketchup (Heinz - 460g) 1200 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("ketchup (Heinz - 460g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>majonéz (Heinz - 460ml) 1250 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("majonéz (Heinz - 460ml)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>mustár (Heinz - 445g) 950 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("mustár (Heinz - 445g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>fűszerpaprika (csípős, Kotányi, 50g) 500 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("fűszerpaprika (csípős, Kotányi, 50g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Tikka masala fűszerkeverék (30g) 330 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Tikka masala fűszerkeverék (30g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Sniding (20g) 600 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Sniding (20g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Citrom (200g) 230 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Citrom (200g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Ételízesítő (Vegeta - 1 kg) 2500 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Ételízesítő (Vegeta - 1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>szójaszósz (Kofa - 170g) 550 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("szójaszósz (Kofa - 170g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Citromlé (Olympos - 1l) 450 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Citromlé (Olympos - 1l)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Koriander (1 csokor - 100g) 1350 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Koriander (1 csokor - 100g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Étkezési lencse (1 kg) 800 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Étkezési lencse (1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Rukkola (1 doboz - 100g) 680 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Rukkola (1 doboz - 100g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Cékla (1kg) 450 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Cékla (1kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Csicseriborsó (500g) 1100 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Csicseriborsó (500g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Kapor (20g) 100 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Kapor (20g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Kecskesajt (P180g) 1800 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Kecskesajt (P180g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Parmezán sajt (200g) 2400 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Parmezán sajt (200g)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Olaj (Kunsági - 1l) 610 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Olaj (Kunsági - 1l)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Tojás (Farm Tojás - 10 db) 780 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Tojás (Farm Tojás - 10 db)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Gomba (1 kg) 1550 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Gomba (1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Rizs (Nagykun - 1 kg) 675 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Rizs (Nagykun - 1 kg)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
        <li><a>Alaplé (STAR - 1l) 1120 Ft
        <div class="center">
                    <div class="col">
                        <button id="addBtn" class="btn-primary" type="button" onclick='add2array("Alaplé (STAR - 1l)")'><i
                                class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </a></li>
    </ul>


    <script>
    function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    const shoppingList = [];

    function add2array(item) {
        shoppingList.push(item);
        const div = document.getElementById('shopping');
        div.innerHTML = shoppingList.join('<br>');
    }

    function resetList() {
        shoppingList.length = 0;
        const div = document.getElementById('shopping');
        div.innerHTML = "";
        div.innerHTML = shoppingList.join('<br>');

    }
    </script>
</body>

</html>