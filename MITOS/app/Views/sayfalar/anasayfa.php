<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mitoloji & Dinler</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->

            <?php
            if (isset($kayitlar) && count($kayitlar) > 0) {

                foreach ($kayitlar as $item) {
                    echo '<div class="col-md-6 col-lg-4 mb-5">';
                    echo '<div class="mx-auto">';
                    echo '<div class="d-flex align-items-center justify-content-center h-100 w-100">';
                    echo '<div class="text-center text-white"><i class="fas fa-plus fa-3x"></i></div>';
                    echo '</div>';
                    echo '<img class="menu-img img-fluid" src="' . base_url("uploads/") . $item['resim'] . '"/>';
                    echo '<h4 class="mt-4">' . $item['baslik'] . '</h4>';
                    echo '<p>' . word_limiter($item['icerik'], 10) . '</p>';
                    echo '<a href ="' . base_url('incele/' . $item['url']) . '" class ="btn btn-secondary">incele</a>';
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
<!-- About Section-->
<section class="page-section bg-light text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-secondary text-center text-uppercase">HAKKIMIZDA</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light text-secondary">
            <div class="divider-custom-line text-secondary"></div>
            <div class="divider-custom-icon text-secondary"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line text-secondary"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis officia veritatis similique fugiat asperiores debitis laboriosam eius, quo dicta architecto eum voluptatibus ab odit qui odio velit vitae voluptas? Corrupti.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, placeat a. Quia, quibusdam, aut ducimus quasi dolore laborum optio ex totam consequatur alias, molestiae sapiente?</p>
            </div>
        </div>
        <!-- About Section Button-->
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">İLETİSİM</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">İsim Soyisim</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Telefon</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Mesaj</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
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
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-secondary btn-xl disabled" id="submitButton" type="submit">Gönder</button>
                </form>
            </div>
        </div>
    </div>
</section>