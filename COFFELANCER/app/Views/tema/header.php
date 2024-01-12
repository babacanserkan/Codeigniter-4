<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>COFFELANCER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar d-none d-lg-block" style="background-color: #76453B;">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i>
                        <a href="#" class="text-white">4000 Street, BALIKESİR/GONEN</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Email@Example.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="<?= base_url() ?>" class="navbar-brand">
                    <h1 class="display-6" style="color: #503C3C;">Coffelancer</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="<?= base_url() ?>" class="nav-item nav-link active">ANASAYFA</a>
                        <a href="<?= base_url() ?>#cesitler" class="nav-item nav-link">ÇEŞİTLER</a>
                        <?= anchor('#indirim"', 'FIRSAT', array('class' => 'nav-item nav-link')) ?>
                        <?= anchor('#iletisim"', 'İLETİŞİM', array('class' => 'nav-item nav-link')) ?>
                        <?= anchor('panel', 'PANEL', array('class' => 'nav-item nav-link')) ?>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <?php
                        if (isset($durum) && $durum) {

                        ?>
                            <a class="nav-item nav-link text-danger" href="<?= base_url('logout') ?>">ÇIKIŞ
                                <i class="fas fa-user fa-2x text-danger"></i></a>
                        <?php
                        } else {
                        ?>
                            <a href="<?= base_url('login') ?>" class="my-auto nav-item nav-link">
                                YÖNETİCİ
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->