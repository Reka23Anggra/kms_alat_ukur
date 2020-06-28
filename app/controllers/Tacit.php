<?php

class Tacit extends Controller {
    function index(){
        $data['judul'] = 'Pengetahuan Tacit';
		$data['sub_judul'] = 'Daftar Pengetahuan';
		$data['data_tacit'] = $this->model('DataHandle')->getAll($table = 'tbl_tacit');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('tacit/index', $data);
        $this->view('templates/footer');
    }

}