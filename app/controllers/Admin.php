<?php

class Admin extends Controller
{
    public function index()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Dashboard';
        $data['breadcrumb_active'] = 'Dashboard';
        $data['breadcrumb_link'] = BASEURL . '/Admin/index';

        $data['getDataGeneral'] = $this->model('User_model')->getGeneral();

        $this->view('templates/header_admin', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer_admin');
    }

    public function ubahIndex()
    {
        if( $this->model('User_model')->ubahDataGeneral($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/index');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/index');
            exit;
        } 
    }

    public function login()
    {
        $this->view('login/index');
    }

    public function processLogin()
    {
        $result = $this->model('User_model')->getLogin();
        // $data['username'] = $this->model('User_model')->getLogin();

        if ($result == 'login') {
            header('Location: ' . BASEURL . '/Admin/index');
            exit;
        } else {
            FlasherLogin::setFlash('Gagal', 'username / password', 'salah', 'danger');
            header('Location: ' . BASEURL . '/Admin/login');
            exit;
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASEURL . '/Admin/login');
    }

    /* ============================ Header ============================ */
    public function header()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Header';
        $data['breadcrumb_active'] = 'Header';
        $data['breadcrumb_link'] = BASEURL . '/Admin/header';
        $data['getData'] = $this->model('User_model')->getAllHeader();

        $this->view('templates/header_admin', $data);
        $this->view('header/index', $data);
        $this->view('templates/footer_admin');
    }

    public function ubahHeader()
    {
        if ($this->model('User_model')->ubahDataHeader($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/header');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/header');
            exit;
        }
    }
    /* ============================ End Header ============================ */

    /* ============================ About ============================ */
    public function about()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Home';
        $data['breadcrumb_active'] = 'About';
        $data['breadcrumb_link'] = BASEURL . '/Admin/about';
        $data['getDataAbout'] = $this->model('User_model')->getAllAbout();

        $this->view('templates/header_admin', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer_admin');
    }

    public function ubahAbout()
    {
        if ($this->model('User_model')->ubahDataAbout($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/about');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/about');
            exit;
        }
    }
    /* ============================ End About ============================ */

    /* ============================ Services ============================ */
    public function services()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Home';
        $data['breadcrumb_active'] = 'Services';
        $data['breadcrumb_link'] = BASEURL . '/Admin/services';
        $data['getDataServices'] = $this->model('User_model')->getAllServices();
        $data['countServices'] = $this->model('User_model')->countServices();

        $this->view('templates/header_admin', $data);
        $this->view('services/index', $data);
        $this->view('templates/footer_admin');
    }

    public function tambahServices()
    {
        if( $this->model('User_model')->tambahDataServices($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Admin/services');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Admin/services');
            exit;
        }
    }

    public function getUbahService()
    {
        echo json_encode($this->model('User_model')->getServicesById($_POST['id']));
    }

    public function ubahServices()
    {
        if( $this->model('User_model')->ubahDataServices($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/services');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/services');
            exit;
        } 
    }
    
    public function hapusServices($id)
    {
        if( $this->model('User_model')->hapusDataServices($id) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Admin/services');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Admin/services');
            exit;
        }
    }
    /* ============================ End Services ============================ */

    /* ============================ Portfolio ============================ */
    public function portfolio()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Home';
        $data['breadcrumb_active'] = 'Portfolio';
        $data['breadcrumb_link'] = BASEURL . '/Admin/portfolio';
        $data['getDataPortfolio'] = $this->model('User_model')->getAllPortfolio();

        $this->view('templates/header_admin', $data);
        $this->view('portfolio/admin', $data);
        $this->view('templates/footer_admin');
    }

    public function tambahPortfolio()
    {
        if( $this->model('User_model')->tambahDataPortfolio($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Admin/portfolio');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Admin/portfolio');
            exit;
        }
    }

    public function ubahPortfolio()
    {
        if( $this->model('User_model')->ubahDataPortfolio($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/portfolio');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/portfolio');
            exit;
        } 
    }
    /* ============================ End Portfolio ============================ */

    /* ============================ Gallery ============================ */
    public function gallery()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Home';
        $data['breadcrumb_active'] = 'Gallery';
        $data['breadcrumb_link'] = BASEURL . '/Admin/gallery';
        $data['getDataSecGallery'] = $this->model('User_model')->getSecGallery();
        $data['getDataGallery'] = $this->model('User_model')->getGallery();

        $this->view('templates/header_admin', $data);
        $this->view('gallery/index', $data);
        $this->view('templates/footer_admin');
    }

    public function tambahSectionGallery()
    {
        if( $this->model('User_model')->tambahSecGallery($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        }
    }

    public function ubahSectionGallery()
    {
        if( $this->model('User_model')->ubahSecGallery($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        } 
    }

    public function tambahGambarGallery()
    {
        
        if( $this->model('User_model')->tambahGallery($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        }
    }

    public function getUbahGallery()
    {
        echo json_encode($this->model('User_model')->getGalleryById($_POST['id']));
    }

    public function ubahGambarGallery()
    {
        if( $this->model('User_model')->ubahGallery($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        } 
    }
    
    public function hapusGambarGallery($id)
    {
        if( $this->model('User_model')->hapusDataGallery($id) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Admin/gallery');
            exit;
        }
    }
    /* ============================ End Gallery ============================ */

    /* ============================ History ============================ */
    public function history()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Home';
        $data['breadcrumb_active'] = 'History';
        $data['breadcrumb_link'] = BASEURL . '/Admin/history';
        $data['getDataGambarHistory'] = $this->model('User_model')->getGambarHistory();
        $data['getDataHeaderHistory'] = $this->model('User_model')->getHeaderHistory();
        $data['getDataHistory'] = $this->model('User_model')->getHistory();

        $this->view('templates/header_admin', $data);
        $this->view('history/admin', $data);
        $this->view('templates/footer_admin');
    }

    public function tambahGambarSejarah()
    {
        if( $this->model('User_model')->tambahGambarSejarah($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        } 
    }

    public function hapusGambarSejarah($id)
    {
        if( $this->model('User_model')->hapusDataGambarSejarah($id) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        }
    }

    public function ubahHeaderSejarah()
    {
        if( $this->model('User_model')->ubahHeaderSejarah($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        } 
    }

    public function ubahSejarah()
    {
        if( $this->model('User_model')->ubahSejarah($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/history');
            exit;
        } 
    }
    /* ============================ End History ============================ */

    /* ============================ Visi ============================ */
    public function visi()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Home';
        $data['breadcrumb_active'] = 'Visi & Misi';
        $data['breadcrumb_link'] = BASEURL . '/Admin/visi';
        $data['getDataSecVisi'] = $this->model('User_model')->getSecVisi();
        $data['getDataVisi'] = $this->model('User_model')->getVisi();
        $data['getDataMisi'] = $this->model('User_model')->getMisi();

        $this->view('templates/header_admin', $data);
        $this->view('visi/admin', $data);
        $this->view('templates/footer_admin');
    }

    public function tambahSectionVisi()
    {
        if( $this->model('User_model')->tambahSecVisi($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        }
    }

    public function ubahSectionVisi()
    {
        if( $this->model('User_model')->ubahSecVisi($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        } 
    }

    public function ubahVisi()
    {
        if( $this->model('User_model')->ubahDataVisi($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        }
    }

    public function ubahMisi()
    {
        if( $this->model('User_model')->ubahDataMisi($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/visi');
            exit;
        }
    }
    /* ============================ End Visi ============================ */
    
    /* ============================ Portfolio Content ============================ */
    public function portfolioContent()
    {
        if ($_SESSION['username'] == '') {
            header('Location: ' . BASEURL . '/Admin/login');
        }

        $data['breadcrumb'] = 'Home';
        $data['breadcrumb_active'] = 'Portfolio Content';
        $data['breadcrumb_link'] = BASEURL . '/Admin/portfolioContent';
        $data['getDataPortCon'] = $this->model('User_model')->getPortfolioContent();

        $this->view('templates/header_admin', $data);
        $this->view('portfolio_content/admin', $data);
        $this->view('templates/footer_admin');
    }

    public function tambahPortfolioContent()
    {
        if( $this->model('User_model')->tambahPortfolioContent($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Admin/portfolioContent');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Admin/portfolioContent');
            exit;
        }
    }

    public function getPortConById()
    {
        echo json_encode($this->model('User_model')->getPortConById($_POST['id']));
    }

    public function ubahDataPortCon()
    {
        if( $this->model('User_model')->ubahPortfolioContent($_POST) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Admin/portfolioContent');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Admin/portfolioContent');
            exit;
        } 
    }

    public function hapusDataPortCon($id)
    {
        if( $this->model('User_model')->hapusPortfolioContent($id) > 0 ) {
            Flasher::setFlash('Data', 'berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Admin/portfolioContent');
            exit;
        } else {
            Flasher::setFlash('Data', 'gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Admin/portfolioContent');
            exit;
        }
    }
    /* ============================ End Portfolio Content ============================ */
} 
