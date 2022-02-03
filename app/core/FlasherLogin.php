<?php

class FlasherLogin
{
    public static function setFlash($validasi, $pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'validasi' => $validasi,
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
            <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                ' . $_SESSION['flash']['validasi'] . ' <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="font-size:12px;"></button>
            </div>
            ';
            unset($_SESSION['flash']);
        }
    }
}
