<?php 

class Mahasiswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $data['listPage'] = $this->model('User_model')->getListNav();
        $data['simpleLink'] = $this->model('User_model')->getSimpleLink();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $data['listPage'] = $this->model('User_model')->getListNav();
        $data['simpleLink'] = $this->model('User_model')->getSimpleLink();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $data['listPage'] = $this->model('User_model')->getListNav();
        $data['simpleLink'] = $this->model('User_model')->getSimpleLink();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer', $data);
    }

}