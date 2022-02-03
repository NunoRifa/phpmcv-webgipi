<?php

class Visi extends Controller {
    public function index()
    {
        $data['judul'] = 'Visi & Misi ||';
        $data['listPage'] = $this->model('User_model')->getListNav();
        $data['simpleLink'] = $this->model('User_model')->getSimpleLink();
        /* Visi & Misi */
        $data['getDataSecVisi'] = $this->model('User_model')->getSecVisi();
        $data['getDataVisi'] = $this->model('User_model')->getVisi();
        $data['getDataMisi'] = $this->model('User_model')->getMisi();
        
        $this->view('templates/header', $data);
        $this->view('visi/index', $data);
        $this->view('templates/footer', $data);
    }
}