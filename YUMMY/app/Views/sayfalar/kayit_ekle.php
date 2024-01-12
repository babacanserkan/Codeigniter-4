<div class="card-body p-4 p-lg-5 text-black">


    <form action="<?= base_url('kayit_ekle') ?>" method="post" enctype="multipart/form-data">
        <br><br>
        <h1 class="mt-4 text-primary">KAYIT EKLE</h1>
        <?= validation_list_errors() ?>

        <div class="form-outline mb-4 form-group">
            <label class="form-label" for="baslik">Başlık</label>
            <input type="text" name="baslik" id="baslik" class="form-control form-control-lg" />
        </div>

        <div class="form-outline mb-4 form-group">
            <label class="sifre" for="icerik">İçerik</label>
            <textarea class="form-control" name="icerik" id="icerik" cols="5" rows="5"></textarea>
        </div>

        <div class="form-outline mb-4 form-group">
            <label class="form-label" for="resim">Başlık</label>
            <input type="file" name="resim" id="resim" placeholder="Lütfen kullanıcı adı girin." class="form-control form-control-lg" />
        </div>

        <div class="pt-1 mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block" type="button">
                Kayıt Ekle
            </button>
        </div>

    </form>

</div>