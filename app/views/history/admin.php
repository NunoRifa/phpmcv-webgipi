<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="row">
    <div class="col-6">
        <div class="card card-primary ml-4">
            <div class="card-header">
                <h3 class="card-title">Tambah Gambar</h3>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-success float-right mb-2 tambahDataSejarah" data-toggle="modal" data-target="#formModal">
                    <i class="fas fa-plus"></i> Tambah Gambar
                </button>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($data['getDataGambarHistory'] as $data_img) :
                        ?>
                            <tr>
                                <th scope="row"><?= $count++ ?></th>
                                <td><img src="<?= BASEURL ?>/img/history/<?= $data_img['gambar_sejarah'] ?>" style="width:150px;height:100px;object-fit:cover;" alt="Component"></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/Admin/hapusGambarSejarah/<?= $data_img['id']; ?>" class="badge bg-danger" onclick="return confirm('Yakin ingin menghapus data?');">hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card card-primary mr-4">
            <div class="card-header">
                <h3 class="card-title">Form Header History</h3>
            </div>
            <form action="<?= BASEURL; ?>/Admin/ubahHeaderSejarah" method="post">
                <div class="card-body">
                    <input type="hidden" id="id" name="id" value="<?= $data['getDataHeaderHistory']['id'] ?>">
                    <div class="form-group">
                        <label>Judul Halaman</label>
                        <input type="text" class="form-control" name="judul_header" id="judul_header" autocomplete="off" value="<?= $data['getDataHeaderHistory']['judul_header'] ?>" placeholder="Judul Halaman" required>
                    </div>
                    <div class="form-group">
                        <label>Konten</label>
                        <textarea class="form-control" name="konten_header" id="konten_header" rows="3" placeholder="Masukan Teks ..."><?= $data['getDataHeaderHistory']['konten_header'] ?></textarea>
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
    </div>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Content History</h3>
    </div>
    <form action="<?= BASEURL; ?>/Admin/ubahSejarah" method="post">
        <div class="card-body">
            <input type="hidden" id="id" name="id" value="<?= $data['getDataHistory']['id'] ?>">
            <div class="form-group">
                <label>Judul Sejarah</label>
                <input type="text" class="form-control" name="judul_history" id="judul_history" autocomplete="off" value="<?= $data['getDataHistory']['judul_history'] ?>" placeholder="Judul Halaman" required>
            </div>
            <div class="form-group">
                <label>Konten Sejarah</label>
                <textarea class="ckeditor" id="ckedtor" name="konten_history"><?= $data['getDataHistory']['konten_history'] ?></textarea>
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
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/Admin/tambahGambarSejarah" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label>Gambar</label>
                        <div class="custom-file mt-2">
                            <input type="file" class="custom-file-input" name="gambar_sejarah" id="gambar_sejarah">
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                        <small class="text-danger"><?= EKSTENSI ?></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>