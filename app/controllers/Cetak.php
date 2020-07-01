<?php
class Cetak extends Controller {
    public function index() {
        $data['judul'] = 'Perawatan';
		$data['sub_judul'] = 'Cetak Data Perawatan';
        $data['cetak_data'] = $this->model('DataHandle')->getCetak();
        
        if ($_SESSION["level"] == 'Admin') {
			
			$data['cetak_data'] = $this->model('DataHandle')->getCetak();
		}
			elseif ($_SESSION["level"] == 'Pegawai') {
				$data['cetak_data'] = $this->model('DataHandle')->getCetak();
		// }else {
		// 	$id_user = $_SESSION['id_user'];
		// 	$data['cetak_data'] = $this->model('DataHandle')->getCetakById($id_user);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('cetak/v_lihat_berkas', $data);
		$this->view('templates/footer');
	
		}
        
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('cetak/index', $data);
		$this->view('templates/footer');
    }

    public function getData() {
        $data['judul'] = 'Perawatan';
        $data['sub_judul'] = 'Cetak Data Perawatan';
        $data['cetak_data'] = $this->model('DataHandle')->getCetak();
        
        if ($_SESSION["level"] == 'Admin') {
			$data['cetak_data'] = $this->model('DataHandle')->getCetak();

		// }else {
		// 	$id_user = $_SESSION['id_user'];
		// 	$data['cetak_data'] = $this->model('DataHandle')->getCetakById($id_user);
		// }
        $this->view('cetak/v_cetak', $data);
    }
    
}
}
