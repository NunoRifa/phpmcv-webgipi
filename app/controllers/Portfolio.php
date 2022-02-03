<?php

class Portfolio extends Controller {
    public function index()
    {
        $data['judul'] = 'Portofolio ||';
        $data['listPage'] = $this->model('User_model')->getListNav();
        $data['simpleLink'] = $this->model('User_model')->getSimpleLink();

        $data['getDataPortfolio'] = $this->model('User_model')->getAllPortfolio();
        $data['getDataPortCon'] = $this->model('User_model')->getPortfolioContent();
        
        $this->view('templates/header', $data);
        $this->view('portfolio/index', $data);
        $this->view('templates/footer', $data);
    }
}