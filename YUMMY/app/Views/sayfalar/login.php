<section class="vh-100" style="background-color: #F5F7F8;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="<?= base_url('assets/img/menu/menu-item-4.png') ?>" alt="login form" class="img-fluid" style="margin-top:25px; margin-left:25px;  border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">


                                <?= validation_list_errors() ?>
                                <form action="<?= base_url('login') ?>" method="post">


                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Hesabınıza Giriş Yapın.</h5>
                                    <?php
                                    if (isset($uyari)) {
                                        echo '<div class="alert alert-danger" role="alert">';
                                        echo $uyari;
                                        echo '</div>';
                                    }
                                    ?>
                                    <?= csrf_field() ?>

                                    <div class="form-outline mb-4 form-group">
                                        <label class="form-label" for="kulad">Kullanıcı Adı</label>
                                        <input type="text" name="kulad" id="kulad" placeholder="Lütfen kullanıcı adı girin." class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4 form-group">
                                        <label class="sifre" for="form2Example27">Şifre</label>
                                        <input name="sifre" type="password" id="sifre" placeholder="Lütfen şifre girin." class="form-control form-control-lg" />
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" type="button">
                                            Giriş Yap
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>