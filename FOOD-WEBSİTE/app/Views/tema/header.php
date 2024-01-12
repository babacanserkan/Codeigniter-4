<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" type="">

    <title> Feane </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">
        <div class="bg-box">
            <img src="<?= base_url() ?>assets/images/bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Feane
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url() ?>#anasayfa">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>#menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>#book">Book Table</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('panel') ?>">Panel</a>
                            </li>
                        </ul>
                        <?php
                        if (isset($durum) && $durum) {

                        ?>
                            <a class="btn-book-a-table" href="<?= base_url('logout') ?>">Çıkış</a>
                        <?php
                        } else {
                        ?>
                            <div class="user_option">
                                <a class="cart_link" href="#">
                                    <a href="<?= base_url('login') ?>" class="order_online">
                                        PANEL GİRİŞ
                                    </a>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </nav>
            </div>
        </header>