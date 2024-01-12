<!-- About-->
<section class="page-section bg-primary" id="hakkimda">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">İhtiyacınız olan şey bizde var!</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Merhaba, biz Alperen, Ali ve Bünyamin. THE UNIVERSE adlı websitesinin kurucuları olarak, evrenin sınırsız potansiyeline adanmış bu platformu sizinle paylaşmaktan büyük bir heyecan duyuyoruz.

                    Her birimiz, gökyüzünün derinliklerindeki sırları keşfetme tutkusunu taşıyoruz. Bu tutkuyu, herkesin evrenin büyüsünü keşfetmesine ve bu büyüye ortak olmasına olan inancımızla bir araya getirdik.</p>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">İşte Yıldız Sistemi</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
        </div>
    </div>
</section>
<!-- Portfolio-->
<div id="portfolio">
    <div style="margin-bottom: 50px;" class="container m-6">
        <div class="row">
            <?php
            if (isset($kayitlar) && count($kayitlar) > 0) {

                foreach ($kayitlar as $item) {
                    echo '<div style="margin-bottom: 50px" class="col-lg-4 col-sm-6">';
                    echo '<img class="menu-img img-fluid" src="' . base_url("uploads/") . $item['resim'] . '"/>';
                    echo '<h4 class="mt-4">' . $item['baslik'] . '</h4>';
                    echo '<p>' . word_limiter($item['icerik'], 10) . '</p>';
                    echo '<a href ="' . base_url('incele/' . $item['url']) . '" class ="btn btn-secondary">incele</a>';
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
</div>
<!-- Call to action-->
<section class="page-section bg-dark text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">ISTEKLERİNE GÖRE ŞEKİLLENELİM!</h2>
        <p class="lead card text-black h-20">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo error odit exercitationem magnam ratione corrupti, tempore nam fugit dignissimos numquam illo reiciendis nostrum eius voluptatum id asperiores autem totam! Quas?</p>
    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">İletişime Geçelim!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Bir sonraki projenize bizimle başlamaya hazır mısınız? Bize bir mesaj gönderin ve en kısa sürede size geri dönelim!</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">İsim</label>
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
                        <label for="phone">Numara</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Mesaj</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
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
                    <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="GONDER ">GONDER</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+90 (555) 123-4567</div>
            </div>
        </div>
    </div>
</section>