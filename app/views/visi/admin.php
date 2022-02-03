<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Section Visi & Misi</h3>
    </div>
    <form action="<?= BASEURL ?>/Admin/ubahSectionVisi" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>Judul</label>
                <input type="hidden" name="id" id="id" value="<?= $data['getDataSecVisi']['id'] ?>">
                <input type="text" class="form-control" name="visi_judul" value="<?= $data['getDataSecVisi']['visi_judul'] ?>" placeholder="Judul page">
            </div>
            <div class="form-group">
                <label>Konten</label>
                <textarea class="form-control" name="visi_konten" rows="3" placeholder="Masukan Teks ..."><?= $data['getDataSecVisi']['visi_konten'] ?></textarea>
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

<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Visi</h3>
    </div>
    <form action="<?= BASEURL ?>/Admin/ubahVisi" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>Icon</label>
                <input type="hidden" name="id" id="id" value="<?= $data['getDataVisi']['id'] ?>">
                <input type="text" class="form-control" name="icon_visi" value="<?= $data['getDataVisi']['icon_visi'] ?>" placeholder="Icon">
                <small class="text-danger">Noted : Icon dapat dipilih di <a href="https://boxicons.com/" target="_blank">boxicons.com</a>. pilih icon -> pilih tab "Font"</small>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul_visi" value="<?= $data['getDataVisi']['judul_visi'] ?>" placeholder="Judul Visi">
            </div>
            <div class="form-group">
                <label>Konten</label>
                <textarea class="ckeditor" id="ckedtor" name="konten_visi"><?= $data['getDataVisi']['konten_visi'] ?></textarea>
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

<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Misi</h3>
    </div>
    <form action="<?= BASEURL ?>/Admin/ubahMisi" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>Icon</label>
                <input type="hidden" name="id" id="id" value="<?= $data['getDataMisi']['id'] ?>">
                <input type="text" class="form-control" name="icon_misi" value="<?= $data['getDataMisi']['icon_misi'] ?>" placeholder="Icon">
                <small class="text-danger">Noted : Icon dapat dipilih di <a href="https://boxicons.com/" target="_blank">boxicons.com</a>. pilih icon -> pilih tab "Font"</small>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul_misi" value="<?= $data['getDataMisi']['judul_misi'] ?>" placeholder="Judul Visi">
            </div>
            <div class="form-group">
                <label>Konten</label>
                <textarea class="ckeditor" id="ckedtor" name="konten_misi"><?= $data['getDataMisi']['konten_misi'] ?></textarea>
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