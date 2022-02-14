<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Gallery</h3>
    </div>
    <form action="<?= BASEURL ?>/Admin/ubahSectionGallery" method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="hidden" name="id" value="<?= $data['getDataSecGallery']['id'] ?>">
                        <input type="text" class="form-control" name="judul_gallery" value="<?= $data['getDataSecGallery']['judul_gallery'] ?>" placeholder="Judul website">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Judul Berwarna</label>
                        <input type="text" class="form-control" name="judul_gallery_warna" value="<?= $data['getDataSecGallery']['judul_gallery_warna'] ?>" placeholder="Judul website berwarna">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Konten</label>
                <textarea class="form-control" name="konten_gallery" rows="3" placeholder="Masukan Teks ..."><?= $data['getDataSecGallery']['konten_gallery'] ?></textarea>
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
        <h3 class="card-title">Form Input Image Gallery</h3>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-success float-right tambahDataGallery" data-toggle="modal" data-target="#formModal">
            <i class="fas fa-plus"></i> Tambah Gambar
        </button>
        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul Gambar</th>
                    <th scope="col">Konten Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                foreach ($data['getDataGallery'] as $data) :
                ?>
                    <tr>
                        <th scope="row"><?= $count++ ?></th>
                        <td><img src="<?= BASEURL ?>/img/gallery/<?= $data['gambar_galeri'] ?>" style="width:150px;height:100px;object-fit:cover;" alt="Component"></td>
                        <td><?= $data['judul_gambar'] ?></td>
                        <td><?= $data['konten_gambar'] ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/Admin/ubahGambarGallery/<?= $data['id']; ?>" class="badge badge-warning ubahDataGallery" data-toggle="modal" data-target="#formModal" data-id="<?= $data['id']; ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>/Admin/hapusGambarGallery/<?= $data['id']; ?>" class="badge bg-danger" onclick="return confirm('Yakin ingin menghapus data?');">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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
            <form action="<?= BASEURL; ?>/Admin/tambahGambarGallery" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label>Judul Gambar</label>
                        <input type="text" class="form-control" name="judul_gambar" id="judul_gambar" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori Gambar</label>
                        <select class="form-control" id="konten_gambar" name="konten_gambar" required>
                            <option value="" selected disabled>--- Pilih ---</option>
                            <option value="filter-dinas">Rumah Dinas</option>
                            <option value="filter-kontrak">Kontrak</option>
                            <option value="filter-asrama">Asrama</option>
                            <option value="filter-gedung">Gedung</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <div class="custom-file mt-2">
                            <input type="file" class="custom-file-input" name="gambar_galeri" id="gambar_galeri">
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