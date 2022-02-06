<div class="card mx-2 p-3">
    <h2>Hallo, Selamat datang dihalaman <strong>Admin Control</strong></h2>
</div>
<div class="mx-2 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-2">
    <div class="card-header">
        <h3 class="card-title">Form Input</h3>
    </div>
    <form action="<?= BASEURL; ?>/Admin/ubahIndex" method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?= $data['getDataGeneral']['id'] ?>">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= $data['getDataGeneral']['email'] ?>" placeholder="Email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="<?= $data['getDataGeneral']['phone'] ?>" placeholder="Nomor Telepon">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" value="<?= $data['getDataGeneral']['facebook'] ?>" placeholder="Facebook">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" id="instagram" class="form-control" value="<?= $data['getDataGeneral']['instagram'] ?>" placeholder="Instagram">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="<?= $data['getDataGeneral']['whatsapp'] ?>" placeholder="Whatsapp">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Perusahaan</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat Perusahaan"><?= $data['getDataGeneral']['alamat'] ?></textarea>
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