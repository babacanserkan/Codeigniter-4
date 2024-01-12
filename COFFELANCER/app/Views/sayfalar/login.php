<div class="container" style="margin-top: 250px; margin-bottom: 150px; ">
    <div class="row">

        <div class="col-lg-4">
            <h1 class="mt-4 text-primary"><i>Giriş</i></h1>
            <?= validation_list_errors() ?>
            <?php
            if (isset($uyari)) {
                echo '<div class="alert alert-primary" role="alert">';
                echo $uyari;
                echo '</div>';
            }
            ?>
            <form action="<?= base_url('login') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="kulad">Kullanıcı Adı:</label>
                    <input type="text" class="form-control" id="kulad" name="kulad">
                </div>
                <div class="form-group">
                    <label for="sifre">Şifre:</label>
                    <input type="password" class="form-control" id="sifre" name="sifre">
                </div>

                <input type="submit" name="gonder" class="btn btn-primary mt-4" value="Giriş Yap">

            </form>
            <div class='pb-5'></div>
        </div>

        <div class="col-lg-8">
            <h1 class="mt-4 text-primary"><i>Üyelik</i></h1>
            <div class="form-group">
                <label for="kulad">Kullanıcı ADı</label>
                <input type="text" class="form-control" id="kulad" name="kulad">
            </div>
            <div class="form-group">
                <label for="sifre">Şifre:</label>
                <input type="password" class="form-control" id="sifre" name="sifre">
            </div>

            <input type="submit" name="asdgasd" class="btn btn-danger mt-4" value="Giriş Yap">
            <div class='pb-5'></div>
        </div>
    </div>
</div>