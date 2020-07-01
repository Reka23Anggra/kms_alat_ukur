<?php

class Eksplisit extends Controller {
   public function index(){
        $data['judul'] = 'Pengetahuan Eksplisit';
		$data['sub_judul'] = 'Daftar Pengetahuan';
		$data['data_eksplisit'] = $this->model('DataHandle')->getAll($table = 'tbl_eksplisit');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('eksplisit/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
        // $data['auto_kode'] = $this->model('DataHandle')->AmbilDataMax($table = 'tbl_eksplisit', $id_table = 'id_eksplisit');
         $data['judul'] = 'Tambah Pengetahuan Eksplisit';
         $data['sub_judul'] = 'Tambah Data EKsplisit';
         $this->view('templates/header', $data);
         $this->view('templates/sidebar', $data);
         $this->view('eksplisit/v_tambah_eksplisit',$data);
         $this->view('templates/footer');
     }

     public function simpan() {
        // var_dump($_POST);

		if( $this->model('DataHandle')->tambahDataEksplisit($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/Eksplisit/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/Eksplisit/index');
			exit;
		}
    }

    public function getUbah($id, $level){
		if($level == 'Admin' && $level == 'Pakar') {
			header('Location: ' . BASEURL . '/eksplisit/index');
			Flasher::setFlash('User dengan level admin dan Pakar','tidak dapat diubah','CssHapus');
		} else {
			$data['judul'] = 'Mutakhir Data';
			$data['sub_judul'] = 'Mutakhir Data Eksplisit';

			$data['data_eksplisit'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_eksplisit',$id_table = 'id_eksplisit', $id);
			$this->view('templates/header', $data);
			$this->view('templates/sidebar', $data);
			$this->view('eksplisit/v_ubah_eksplisit', $data);
			$this->view('templates/footer');
		}
		
    }
    
    public function ubahData() {
		// var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataEksplisit($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/Eksplisit/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssHapus');
		 	header('Location: ' . BASEURL . '/Eksplisit/index');
		 	exit;
		}
    }   
    
    public function hapus($id)
    {
        if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_eksplisit', $id_table = 'id_eksplisit') > 0) {
            Flasher::setFlash('Berhasil','dihapus','CssHapus');
            header('Location: ' . BASEURL . '/Eksplisit/index');
            exit;
        } else {
            Flasher::setFlash('Gagal','ditambahkan','CssHapus');
            header('Location: ' . BASEURL . '/Eksplisit/index');
            exit;
        }	
    }

}