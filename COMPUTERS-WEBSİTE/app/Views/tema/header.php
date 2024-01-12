<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NewBiz Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <?= anchor('#hero', 'Anasayfa') ?>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#about">Hakkımızda</a></li>
                    <li><a class="nav-link scrollto " href="<?= base_url() ?>#portfolio">Bilgisayarlar</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#contact">İletişim</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('panel') ?>">PANEL</a></li>
                    <?php
                    if (isset($durum) && $durum) {

                    ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link scrollto" href="<?= base_url('logout') ?>">PANEL ÇIKIŞ</a></li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link scrollto" href="<?= base_url('login') ?>">PANEL GİRİŞ</a></li>
                    <?php
                    }
                    ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>