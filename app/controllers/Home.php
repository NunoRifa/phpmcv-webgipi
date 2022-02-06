<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = '';
        $data['listPage'] = $this->model('User_model')->getListNav();
        $data['simpleLink'] = $this->model('User_model')->getSimpleLink();
        $data['getDataGeneral'] = $this->model('User_model')->getGeneral();

        /* Header */
        $data['getDataHeader'] = $this->model('User_model')->getAllHeader();
        /* About Us */
        $data['getDataAbout'] = $this->model('User_model')->getAllAbout();
        /* Services */
        $data['getDataServices'] = $this->model('User_model')->getAllServices();
        /* Portfolio */
        $data['getDataPortfolio'] = $this->model('User_model')->getAllPortfolio();
        $data['getDataPortCon'] = $this->model('User_model')->getPortfolioContent();
        /* Gallery */
        $data['getDataSecGallery'] = $this->model('User_model')->getSecGallery();
        $data['getDataGallery'] = $this->model('User_model')->getGallery();

        $this->view('templates/header', $data);
        $this->view('header/home', $data);
        $this->view('about/home', $data);
        $this->view('services/home', $data);
        $this->view('portfolio/home', $data);
        $this->view('gallery/home', $data);
        // $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}