<?php

class History extends Controller {
    public function index()
    {
        $data['judul'] = 'Sejarah ||';
        $data['listPage'] = $this->model('User_model')->getListNav();
        $data['simpleLink'] = $this->model('User_model')->getSimpleLink();

        $data['getDataGeneral'] = $this->model('User_model')->getGeneral();
        $data['getDataGambarHistory'] = $this->model('User_model')->getGambarHistory();
        $data['getDataHeaderHistory'] = $this->model('User_model')->getHeaderHistory();
        $data['getDataHistory'] = $this->model('User_model')->getHistory();

        $this->view('templates/header', $data);
        $this->view('history/index', $data);
        $this->view('templates/footer', $data);
    }
}