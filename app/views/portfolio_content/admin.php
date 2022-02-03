<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Content Portfolio</h3>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-success float-right mb-2 tambahDataPortofolio" data-toggle="modal" data-target="#formModal">
            <i class="fas fa-plus"></i> Tambah Data
        </button>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul Portofolio</th>
                    <th scope="col">Deskripsi Portofolio</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                foreach ($data['getDataPortCon'] as $data) :
                ?>
                    <tr>
                        <th scope="row"><?= $count++ ?></th>
                        <td><img src="<?= BASEURL ?>/img/clients/<?= $data['gambar_konpor'] ?>" style="width:150px;height:100px;object-fit:cover;" alt="Component"></td>
                        <td><?= $data['judul_konpor'] ?></td>
                        <td><?= $data['konten_konpor'] ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/Admin/ubahDataPortCon/<?= $data['id']; ?>" class="badge badge-warning ubahDataPortfolio" data-toggle="modal" data-target="#formModal" data-id="<?= $data['id']; ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>/Admin/hapusDataPortCon/<?= $data['id']; ?>" class="badge bg-danger" onclick="return confirm('Yakin ingin menghapus data?');">hapus</a>
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
            <form action="<?= BASEURL; ?>/Admin/tambahPortfolioContent" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label>Judul Portofolio</label>
                        <div class="custom-file mt-2">
                            <input type="text" class="form-control" id="judul_konpor" name="judul_konpor" placeholder="Judul Portofolio" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Portofolio</label>
                        <div class="custom-file mt-2">
                            <textarea class="form-control" name="konten_konpor" id="konten_konpor" placeholder="Deskripsi Portofolio" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <div class="custom-file mt-2">
                            <input type="file" class="custom-file-input" name="gambar_konpor" id="gambar_konpor">
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
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