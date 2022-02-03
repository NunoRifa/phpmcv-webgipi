<div class="mx-4 mb-2">
    <?php Flasher::flash(); ?>
</div>
<div class="card card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Form Input Layanan</h3>
    </div>
    <div class="card-body">
        <?php
        if ($data['countServices']['total'] >= 4) {
            echo '';
        } else {
            echo '
                    <button type="button" class="btn btn-success float-right tambahDataServices" data-toggle="modal" data-target="#formModal">
                        <i class="fas fa-plus"></i> Tambah Data
                    </button>
                ';
        }
        ?>
        <br>
        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Style Icon</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kontent</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                foreach ($data['getDataServices'] as $data) :
                ?>
                    <tr>
                        <th scope="row"><?= $count++ ?></th>
                        <td><i class='<?= $data['icon_services'] ?>'></i></td>
                        <td><?= $data['icon_services'] ?></td>
                        <td><?= $data['judul_services'] ?></td>
                        <td><?= $data['konten_services'] ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/Admin/ubahServices/<?= $data['id']; ?>" class="badge badge-warning ubahDataServices" data-toggle="modal" data-target="#formModal" data-id="<?= $data['id']; ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>/Admin/hapusServices/<?= $data['id']; ?>" class="badge bg-danger" onclick="return confirm('Yakin ingin menghapus data?');">hapus</a>
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
            <form action="<?= BASEURL; ?>/Admin/tambahServices" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label>Icon</label>
                        <input type="text" class="form-control" id="icon_services" name="icon_services" autocomplete="off" required>
                        <small class="text-danger">Noted : Icon dapat dipilih di <a href="https://boxicons.com/" target="_blank">boxicons.com</a>. pilih icon -> pilih tab "Font"</small>
                    </div>
                    <div class="form-group">
                        <label>Judul Services</label>
                        <input type="text" class="form-control" id="judul_services" name="judul_services" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Konten</label>
                        <textarea class="form-control" name="konten_services" id="konten_services" cols="3"></textarea>
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