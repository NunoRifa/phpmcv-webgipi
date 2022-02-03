<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Portfolio</h3>
    </div>
    <form action="<?= BASEURL ?>/Admin/ubahPortfolio" method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="hidden" name="id" value="<?= $data['getDataPortfolio']['id'] ?>">
                        <input type="text" class="form-control" name="judul_portofolio" value="<?= $data['getDataPortfolio']['judul_portofolio'] ?>" placeholder="Judul website">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Judul Berwarna</label>
                        <input type="text" class="form-control" name="judul_portofolio_warna" value="<?= $data['getDataPortfolio']['judul_portofolio_warna'] ?>" placeholder="Judul website berwarna">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Konten</label>
                <textarea class="form-control" name="konten_portofolio" rows="3" placeholder="Masukan Teks ..."><?= $data['getDataPortfolio']['konten_portofolio'] ?></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">
                <i class="fas fa-save mr-2"></i>
                Simpan
            </button>
        </div>
    </form>
</div>