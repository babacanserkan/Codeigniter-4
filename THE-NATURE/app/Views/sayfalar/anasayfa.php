<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-4">Merhaba ben yıldırım.</h2>
                <p class="text-white-50">
                    Doğanın derinliklerine bir pencere açan, doğanın eşsiz güzellikleriyle dolu bir dünya bulacaksınız. Her yemyeşil orman, her mavi deniz, her dağın zirvesi, doğanın bize armağanıdır. Ben de bu armağanı sizinle paylaşmak için buradayım.
                </p>
            </div>
        </div>
        <img class="img-fluid" src="<?= base_url() ?>assets/img/ipad.png" alt="..." />
    </div>
</section>
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" src="<?= base_url() ?>assets/img/bg-masthead.jpg" alt="..." />
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Shoreline</h4>
                    <p class="text-black-50 mb-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati distinctio et eveniet minus ea natus culpa. Harum veritatis eaque laboriosam ullam inventore dolor sit quam?
                    </p>
                </div>
            </div>
        </div>

        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <?php
            if (isset($kayitlar) && count($kayitlar) > 0) {

                foreach ($kayitlar as $item) {

                    echo '<div class="col-lg-6">';
                    echo '<img class="img-fluid" src="' . base_url("uploads/") . $item['resim'] . '"/>';
                    echo '</div>';
                    echo '<div class="col-lg-6">';
                    echo '<div class="bg-black text-center h-100 project">';
                    echo '<div class="d-flex h-100">';
                    echo '<div class="project-text w-100 my-auto text-center text-lg-left">';
                    echo '<h4 class="mt-4 text-white">' . $item['baslik'] . '</h4>';
                    echo '<p class="text-white">' . word_limiter($item['icerik'], 10) . '</p>';
                    echo '<a href ="' . base_url('incele/' . $item['url']) . '" class ="text-dark btn btn-white">incele</a>';
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
<!-- Signup-->
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Bana Ulaşmak için! </h2>
                <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Email address input-->
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <input class="form-control" id="emailAddress" type="email" placeholder="Emailini gir..." aria-label="Enter email address..." data-sb-validations="required,email" />
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary disabled" id="submitButton" type="submit">
                                TIKLA
                            </button>
                        </div>
                    </div>
                    <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">
                        An email is required.
                    </div>
                    <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">
                        Email is not valid.
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3 mt-2 text-white">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3 mt-2">
                            Error sending message!
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">ADRES</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">
                            BALIKESİR GÖNEN MYO 4000
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">EMAİL</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">
                            <a href="#!">yıldırım@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">TELEFON</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">90 (555) 902-8832</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>