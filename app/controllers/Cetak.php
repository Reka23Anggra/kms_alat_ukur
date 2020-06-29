<?php
class Cetak extends Controller {
    public function index() {
        $data['judul'] = 'Perawatan';
		$data['sub_judul'] = 'Cetak Data Perawatan';
		$data['cetak_data'] = $this->model('DataHandle')->getCetak();
        
        // $id = $_SESSION['id_perawatan_alat'];
        // $data['cetak_data'] = $this->model('DataHandle')->getProjectById($id);
        
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('cetak/index', $data);
		$this->view('templates/footer');
    }

    public function getData() {
        $data['judul'] = 'Perawatan';
        $data['sub_judul'] = 'Cetak Data Perawatan';
        $data['cetak_data'] = $this->model('DataHandle')->getCetak();
        
            // $id = $_SESSION['id_perawatan_alat'];
            // $data['cetak_data'] = $this->model('DataHandle')->getProjectById($id);
        
        $this->view('cetak/v_cetak', $data);
    }
    
}