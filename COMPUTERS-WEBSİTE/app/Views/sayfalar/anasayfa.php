<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">
        <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.svg" alt="" class="img-fluid" />
        </div>

        <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
            <h2>İşletmeniz için Çözümler Sunuyoruz! <br /><span> Bilgisayar Dünyasında </span><br />Yenilik ve Verimliliği Buluşturan Adres!</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>Biz Kimiz?</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </header>

            <div class="row about-container">
                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">
                            Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis est eligendi
                        </p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum
                        </p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">
                            Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat tarad limino ata
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
                    <img src="assets/img/about-img.svg" class="img-fluid" alt="" />
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
                    <h4>
                        Voluptatem dignissimos provident quasi corporis voluptates sit
                        assumenda.
                    </h4>
                    <p>
                        Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati
                        possimus ea. Quas molestiae perspiciatis occaecati qui rerum.
                        Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae
                        non ad at et a.
                    </p>
                    <p>
                        Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit
                        qui asperiores ea corporis deserunt veritatis quidem expedita
                        perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum
                        eum eum.
                    </p>
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                    <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
                    <h4>
                        Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora
                        facere reprehenderit.
                    </h4>
                    <p>
                        Delectus alias ut incidunt delectus nam placeat in consequatur. Sed
                        cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque
                        fugit earum est quam officiis numquam. Ducimus corporis autem at
                        blanditiis beatae incidunt sunt.
                    </p>
                    <p>
                        Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas
                        mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae
                        debitis. Dolorem cupiditate est perferendis iusto.
                    </p>
                    <p>
                        Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint
                        quia modi. Numquam est aut fuga mollitia exercitationem nam
                        accusantium provident quia.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="clearfix">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3 class="section-title">Geçmişten günümüze bilgisayarlar</h3>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <?php
                if (isset($kayitlar) && count($kayitlar) > 0) {

                    foreach ($kayitlar as $item) {

                        echo '<div class="col-lg-4 col-md-6 portfolio-item filter-web">';
                        echo '<div class="portfolio-wrap">';
                        echo '<img src="' . base_url("uploads/") . $item['resim'] . '" class="img-fluid" alt="" />';
                        echo '<div class="portfolio-info">';
                        echo '<h4 class="text-white">' . $item['baslik'] . '</h4>';
                        echo '<p>' . word_limiter($item['icerik'], 3) . '</p>';
                        echo '<div>';
                        echo '<a href="' . base_url("uploads/") . $item['resim'] . '" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="' . word_limiter($item['icerik'], 50) . '"><i class="bi bi-plus"></i></a>';
                        echo '<a href="' . base_url('incele/' . $item['url']) . '" class="link-details" title="More Details"><i class="bi bi-link"></i></a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
                <?php
                } else {
                ?>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Our CLients</h3>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque dere santome nida.
                </p>
            </div>

            <div class="row g-0 clients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-8.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->


</main>