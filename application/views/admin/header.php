<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WYM</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="<?= base_url()?>/assets/img/logo1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">For you</a></li>
                                <li><a href="./categories.html">Categories</a></li>
                                <li><a href="<?= base_url()?>/genre">Genre</a></li>
                                <li><a href="<?= base_url()?>/Country">Country</a></li>
                                <li><a href="<?= base_url()?>/Advance">Advance search</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="<?= base_url()?>"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->