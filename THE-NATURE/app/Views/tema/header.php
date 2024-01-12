<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TÜRKİYENİN GÜZELLİKLERİ</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url() ?>#page-top">National Geographic</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <?= anchor('#about', 'HAKKIMDA', array('class' => 'nav-link')) ?>
                    </li>
                    <li class="nav-item">
                        <?= anchor('#projects', 'PROJELER', array('class' => 'nav-link')) ?>
                    </li>
                    <li class="nav-item">
                        <?= anchor('#signup', 'İLETİŞİM', array('class' => 'nav-link')) ?>
                    </li>
                    <li class="nav-item">
                        <?= anchor('panel', 'PANEL', array('class' => 'nav-link')) ?>
                    </li>

                    <?php
                    if (isset($durum) && $durum) {

                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('logout') ?>">ÇIKIŞ</a></li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">PANEL GİRİŞ</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">DOĞA</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Anlık doğa deneyimleri sunan, doğa tutkunları için özenle hazırlanmış dijital bir platform.</h2>
                    <a class="btn btn-primary" href="<?= base_url() ?>#about">Hadi Başlayalım!</a>
                </div>
            </div>
        </div>
    </header>