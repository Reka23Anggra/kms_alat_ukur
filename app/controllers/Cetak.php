<?php
class Cetak extends Controller {
    public function index() {
        $data['judul'] = 'Perawatan';
		$data['sub_judul'] = 'Cetak Data Perawatan';
        //$data['cetak_data'] = $this->model('DataHandle')->getCetak();
		$data['cetak_data'] = $this->model('DataHandle')->getAll($table = 'tbl_perawatan');
        
        if ($_SESSION["level"] == 'Admin') {
			$data['cetak_data'] = $this->model('DataHandle')->getAll($table = 'tbl_perawatan');
			//$data['cetak_data'] = $this->model('DataHandle')->getCetak();
		}
			elseif ($_SESSION["level"] == 'Pegawai') {
				$data['cetak_data'] = $this->model('DataHandle')->getAll($table = 'tbl_perawatan');
				//$data['cetak_data'] = $this->model('DataHandle')->getCetak();
		}
		// else {
		// 	$id_user = $_SESSION['id_user'];
		// 	$data['cetak_data'] = $this->model('DataHandle')->getCetakById($id_user);
		// $this->view('templates/header', $data);
		// $this->view('templates/sidebar', $data);
		// $this->view('cetak/v_lihat_berkas', $data);
		// $this->view('templates/footer');
	
		
        
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('cetak/index', $data);
		$this->view('templates/footer');
    }

	public function tambahData()
    {
    $data['judul'] = 'Tambah Modul Pengetahuan';
    $data['sub_judul'] = 'Tambah Data Modul';
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('cetak/v_tambah_perawatan',$data);
    $this->view('templates/footer');
	}

	public function simpan() {
        // var_dump($_POST);

		if( $this->model('DataHandle')->tambahDataPerawatan($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/Cetak/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/Cetak/index');
			exit;
		}
    }
	
    public function getData($id) {
        $data['judul'] = 'Perawatan';
        $data['sub_judul'] = 'Cetak Data Perawatan';
        $data['cetak_data'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_perawatan',$id_table = 'id_perawatan_alat', $id);
        
        $this->view('cetak/v_print', $data);
    }
	
	public function hapus($id)
    {
        if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_perawatan', $id_table = 'id_perawatan_alat') > 0) {
            Flasher::setFlash('Berhasil','dihapus','CssHapus');
            header('Location: ' . BASEURL . '/Cetak/index');
            exit;
        } else {
            Flasher::setFlash('Gagal','ditambahkan','CssHapus');
            header('Location: ' . BASEURL . '/Cetak/index');
            exit;
        }	
    }
}

