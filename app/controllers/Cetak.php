<?php
class Cetak extends Controller {
    public function index() {
        $data['judul'] = 'Perawatan';
		$data['sub_judul'] = 'Cetak Data Perawatan';
		
		if ($_SESSION["level"] == 'Admin') {
			$data['cetak_data'] = $this->model('DataHandle')->getCetak();
		}else
		{	
            if ($_SESSION["level"] == 'Pakar')
            {
                $data['cetak_data'] = $this->model('DataHandle')->getCetak();
            }
			else{
                    ($_SESSION["level"] == 'Pegawai')
                     $data['cetak_data'] = $this->model('DataHandle')->getCetak();
                }
        }   
    }
        
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('cetak/index', $data);
		$this->view('templates/footer');
    }

    public function getData() {
        $data['judul'] = 'Perawatan';
        $data['sub_judul'] = 'Cetak Data Perawatan';
        if ($_SESSION["level"] == 'Admin') {
			$data['cetak_data'] = $this->model('DataHandle')->getCetak();
		}else
		{	
            if ($_SESSION["level"] == 'Pakar')
            $data['cetak_data'] = $this->model('DataHandle')->getCetak();
		}else {
			if ($_SESSION["level"] == 'Pegawai')
            $data['cetak_data'] = $this->model('DataHandle')->getCetak();
        }
        
    }
    
}