<div class="card-body p-4 p-lg-5 text-black">


    <form action="<?= base_url('kayit_duzenle/' . $veri['id']) ?>" method="post">
        <br><br>
        <h1 class="mt-4 text-primary">KAYIT DÜZENLE</h1>
        <?= validation_list_errors() ?>

        <div class="form-outline mb-4 form-group">
            <label class="form-label" for="baslik">Başlık</label>
            <input type="text" name="baslik" id="baslik" value="<?= esc($veri['baslik']) ?>" class="form-control form-control-lg" />
        </div>

        <div class="form-outline mb-4 form-group">
            <label for="icerik">İçerik</label>
            <textarea class="form-control" name="icerik" id="icerik" value="<?= esc($veri['baslik']) ?>" cols="5" rows="5"></textarea>
        </div>

        <div class="pt-1 mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block" type="button">
                Güncelle
            </button>
        </div>

    </form>

</div>