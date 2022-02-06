<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Header</h3>
    </div>
    <?php foreach ($data['getData'] as $data) : ?>
        <form action="<?= BASEURL; ?>/Admin/ubahHeader" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>">
                            <label for="judul_header">Judul</label>
                            <input type="text" name="judul_header" id="judul_header" class="form-control" value="<?= $data['judul_header'] ?>" placeholder="Judul website">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="judul_warna_header">Judul Berwarna</label>
                            <input type="text" name="judul_warna_header" id="judul_warna_header" class="form-control" value="<?= $data['judul_warna_header'] ?>" placeholder="Judul website berwarna">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="konten_header">Konten</label>
                    <textarea name="konten_header" id="konten_header" class="form-control" rows="3" placeholder="Masukan Teks ..."><?= $data['konten_header'] ?></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">
                    <i class="fas fa-save mr-2"></i>
                    Simpan
                </button>
            </div>
        </form>
    <?php endforeach; ?>
</div>