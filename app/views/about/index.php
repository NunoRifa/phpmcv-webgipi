<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Tentang Kami</h3>
    </div>
    <?php foreach ($data['getDataAbout'] as $data) : ?>
        <form action="<?= BASEURL; ?>/Admin/ubahAbout" method="post" enctype='multipart/form-data'>
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>">
                    <label>Judul Page Bagian</label>
                    <input type="text" class="form-control" name="judul_section" value="<?= $data['judul_section'] ?>" placeholder="Judul Page Bagian">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" value="<?= $data['judul'] ?>" placeholder="Judul website">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Judul Berwarna</label>
                            <input type="text" class="form-control" name="judul_warna" value="<?= $data['judul_warna'] ?>" placeholder="Judul website berwarna">
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label>Deskripsi Judul</label>
                    <textarea class="form-control" name="desc_judul" rows="3" placeholder="Masukan Teks ..."><?= $data['desc_judul'] ?></textarea>
                </div> -->
                <hr>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <br>
                            <img src="<?= BASEURL ?>/img/aboutus/<?= $data['gambar_tentang'] ?>" alt="Component" style="width:150px;height:150px;object-fit:cover;">
                            <div class="custom-file mt-2">
                                <input type="file" class="custom-file-input" name="gambar_tentang">
                                <label class="custom-file-label" for="customFile"><?= $data['gambar_tentang'] ?></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Judul Konten Tentang Kami</label>
                    <input type="text" class="form-control" name="judul_konten" value="<?= $data['judul_konten'] ?>" placeholder="Judul Konten Tentang Kami">
                </div>
                <div class="form-group">
                    <label>Kontent Tentang Kami</label>
                    <textarea class="ckeditor" id="ckedtor" name="konten_tentang"><?= $data['konten_tentang'] ?></textarea>
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