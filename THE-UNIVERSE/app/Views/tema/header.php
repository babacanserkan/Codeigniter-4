<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Yıldız Sistemi</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url() ?>#page-top">THE UNIVERSE</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#hakkimda">HAKKIMIZDA</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#services">GEZEGENLER</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#contact">ILETISIM</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('panel') ?>">PANEL SAYFA</a></li>
                    <?php
                    if (isset($durum) && $durum) {

                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('logout') ?>">PANEL ÇIKIŞ</a></li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">PANEL GİRİŞ</a>
                        <?php
                    }
                        ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Favori web siteniz!</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">THE UNIVERSE, Yıldızların gizemli dünyasını size getiriyor. Bu platform, gökyüzünün büyüsünü yakalamanızı ve yıldızlar arası bir serüvene katılmanızı sağlıyor.</p>
                    <a class="btn btn-primary btn-xl" href="<?= base_url() ?>#services">KEŞFE ÇIKIN</a>
                </div>
            </div>
        </div>
    </header>