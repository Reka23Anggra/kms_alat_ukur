<?php

class Obrolan extends Controller {
   public function index(){
        $data['judul'] = 'Forum Diskusi';
		$data['sub_judul'] = 'Daftar Pertanyaan';
		$data['data_chat'] = $this->model('DataHandle')->getAll($table = 'obrolan');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('obrolan/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
        // $data['auto_kode'] = $this->model('DataHandle')->AmbilDataMax($table = 'tbl_tacit', $id_table = 'id_tacit');
         $data['judul'] = 'Tambah Pertanyaan';
         $data['sub_judul'] = 'Tambah Diskusi';
         $this->view('templates/header', $data);
         $this->view('templates/sidebar', $data);
         $this->view('obrolan/v_tambah_chat',$data);
         $this->view('templates/footer');
     }

     public function simpan() {
        // var_dump($_POST);

		if( $this->model('DataHandle')->tambahDataChat($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/Obrolan/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/Obrolan/index');
			exit;
		}
    }

    public function getUbah($id){
		// if($level == 'Pegawai' || $level == 'pegawai') {
		// 	header('Location: ' . BASEURL . '/obrolan/index');
		// 	Flasher::setFlash('User dengan level Pegawai','tidak dapat Mutakhir','CssHapus');
		// } else {
			$data['judul'] = 'Ubah Pertanyaan';
			$data['sub_judul'] = 'Ubah Pertanyaan';

			$data['data_chat'] = $this->model('DataHandle')->getAllWhere($table = 'obrolan',$id_table = 'id_chat', $id);
			$this->view('templates/header', $data);
			$this->view('templates/sidebar', $data);
			$this->view('obrolan/v_ubah_chat', $data);
			$this->view('templates/footer');
		// }
		
    }
    
    public function ubahData() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataChat($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/Obrolan/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssHapus');
		 	header('Location: ' . BASEURL . '/Obrolan/index');
		 	exit;
		}
    }   
    
    public function hapus($id)
    {
        if( $this->model('DataHandle')->hapusData($id, $table = 'obrolan', $id_table = 'id_chat') > 0) {
            Flasher::setFlash('Berhasil','dihapus','CssHapus');
            header('Location: ' . BASEURL . '/Obrolan/index');
            exit;
        } else {
            Flasher::setFlash('Gagal','ditambahkan','CssHapus');
            header('Location: ' . BASEURL . '/Obrolan/index');
            exit;
        }	
    }

}
