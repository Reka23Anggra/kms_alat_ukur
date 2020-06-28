<?php

class Tacit extends Controller {
   public function index(){
        $data['judul'] = 'Pengetahuan Tacit';
		$data['sub_judul'] = 'Daftar Pengetahuan';
		$data['data_tacit'] = $this->model('DataHandle')->getAll($table = 'tbl_tacit');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('tacit/index', $data);
        $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_tacit', $id_table = 'id_tacit') > 0) {
            Flasher::setFlash('Berhasil','dihapus','CssHapus');
            header('Location: ' . BASEURL . '/Tacit/index');
            exit;
        } else {
            Flasher::setFlash('Gagal','ditambahkan','CssHapus');
            header('Location: ' . BASEURL . '/Tacit/index');
            exit;
        }	
    }

    public function tambahData() {
       // $data['auto_kode'] = $this->model('DataHandle')->AmbilDataMax($table = 'tbl_tacit', $id_table = 'id_tacit');
		$data['judul'] = 'Tambah Pengetahuan Tacit';
		$data['sub_judul'] = 'Tambah Data Tacit';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('tacit/v_tambah_tacit',$data);
		$this->view('templates/footer');
    }
    
    public function simpan() {
        // var_dump($_POST);

		if( $this->model('DataHandle')->tambahDataTacit($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/Tacit/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/Tacit/index');
			exit;
		}
    }

    public function getUbah($id, $level){
		if($level == 'Admin' && $level == 'Pakar') {
			header('Location: ' . BASEURL . '/tacit/index');
			Flasher::setFlash('User dengan level admin dan Pakar','tidak dapat diubah','CssHapus');
		} else {
			$data['judul'] = 'Tacit';
			$data['sub_judul'] = 'Ubah Data Tacit';

			$data['data_tacit'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_tacit',$id_table = 'id_tacit', $id);
			$this->view('templates/header', $data);
			$this->view('templates/sidebar', $data);
			$this->view('tacit/v_ubah_tacit', $data);
			$this->view('templates/footer');
		}
		
	}

    public function ubahData() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataTacit($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/Tacit/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssHapus');
		 	header('Location: ' . BASEURL . '/Tacit/index');
		 	exit;
		}
	}   
}