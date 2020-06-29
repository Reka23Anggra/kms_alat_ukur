<?php

class Pengguna extends Controller {
	public function __construct(){
		// if(!isset($_SESSION["username"]))  {  
		// 	header('Location: ' . BASEURL . '/login/index');  
		// }	
	}

    public function index() {
		// if($_SESSION["role_user"] !== 'Admin') {
		// 	header('Location: ' . BASEURL . '/login/index');
		// }

        $data['judul'] = 'User';
		$data['sub_judul'] = 'Daftar Pengguna';
		$data['data_pengguna'] = $this->model('DataHandle')->getAll($table = 'tbl_user');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/index', $data);
        $this->view('templates/footer');
	}
	
	public function detilProfile($id) {
		$data['judul'] = 'Profile';
		$data['sub_judul'] = 'Ubah Data Profile';
		$data['data_pengguna'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_pengguna',$id_table = 'nik', $id);
		$data['data_pesan'] = $this->model('DataHandle')->getPesanMasuk($table = 'tbl_pesan', $id_table = 'nik_penerima', $id=$id, $orderBy='tgl_kirim');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/v_detil_profile', $data);
		$this->view('templates/footer');
	}

    public function tambahData() {
		$data['judul'] = 'Pengguna';
		$data['sub_judul'] = 'Tambah Pengguna';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/v_tambah_pengguna',$data);
		$this->view('templates/footer');
	}

    public function buatAdmin() {
		if($_SESSION["role_user"] !== 'SuperAdmin') {
			header('Location: ' . BASEURL . '/login/index');
		}
		
		$data['judul'] = 'Buat Pengguna';
		$data['sub_judul'] = 'Menambahkan Data Pengguna untuk pertama kali, pastikan memilih role user Admin';
		$this->view('templates/header');
		// $this->view('templates/sidebar', $data);
		$this->view('pengguna/v_tambah_pengguna',$data);
		$this->view('templates/footer');
	}

	public function simpan() {
		if( $this->model('DataHandle')->tambahDataPengguna($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/pengguna/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/pengguna/index');
			exit;
		}
	}

	public function hapus($id, $level) {
		if($_SESSION["id_user"] == $id || $level == 'Admin') {
			header('Location: ' . BASEURL . '/pengguna/index');
			Flasher::setFlash('Pengguna dengan level admin','tidak dapat dihapus','CssHapus');
		} else {
			if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_user', $id_table = 'id_user') > 0) {
				Flasher::setFlash('Berhasil','dihapus','CssHapus');
				header('Location: ' . BASEURL . '/pengguna/index');
				exit;
			} else {
				Flasher::setFlash('Gagal','ditambahkan','CssHapus');
				header('Location: ' . BASEURL . '/pengguna/index');
				exit;
			}	
		}
	}
 
	public function getUbah($id, $level){
		if($level == 'Admin') {
			header('Location: ' . BASEURL . '/pengguna/index');
			Flasher::setFlash('Pengguna dengan level admin','tidak dapat diubah','CssHapus');
		} else {
			$data['judul'] = 'Pengguna';
			$data['sub_judul'] = 'Ubah Data Pengguna';

			$data['data_pengguna'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_user',$id_table = 'id_user', $id);
			$this->view('templates/header', $data);
			$this->view('templates/sidebar', $data);
			$this->view('pengguna/v_ubah_pengguna', $data);
			$this->view('templates/footer');
		}
		
	}
	
	public function ubahData() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataPengguna($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/pengguna/index');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssHapus');
		 	header('Location: ' . BASEURL . '/pengguna/index');
		 	exit;
		}
	}   

	public function ubahProfile($id) {
		$data['judul'] = 'Profil';
		$data['sub_judul'] = 'Ubah Data Profil';
		$data['data_pengguna'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_user',$id_table = 'id_user', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/v_ubah_profile', $data);
		$this->view('templates/footer');
	}
	
	public function ubahDataProfile() {
		//var_dump($_POST);

		if( $this->model('DataHandle')->ubahDataPengguna ($_POST) > 0) {
		 	Flasher::setFlash('Berhasil','diubah','CssUpdate');
		 	header('Location: ' . BASEURL . '/pengguna/lihatProfile/' . $_SESSION['id_user'] .'');
		 	exit;
		} else {
		 	Flasher::setFlash('gagal','diubah','CssHapus');
		 	header('Location: ' . BASEURL . '/pengguna/lihatProfile/' . $_SESSION['id_user'] .'');
		 	exit;
		}
	}

	public function ubahPass($id) {
		$data['judul'] = 'Profile';
		$data['sub_judul'] = 'Ubah Password Profile';
		$data['data_pengguna'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_user',$id_table = 'id_user', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pengguna/v_ubah_pass', $data);
		$this->view('templates/footer');
	}

	public function simpanPass() {

		$nik = $_POST["id_user"];
		$pass_lama = md5($_POST["password_lama"]);
		$pass_baru = md5($_POST["password_baru"]);
		$conf_pass_baru = md5($_POST["conf_password_baru"]);
		
		// GET DATA PASS
		$post = array(
			'id_user' => $nik,
			'password_lama' => $pass_lama,
			'password_baru' => $pass_baru,
			'conf_password_baru' => $conf_pass_baru
		);

		// login pertama
		if( $this->model('DataHandle')->cekPassLama($post) > 0) {
			if($pass_baru == $conf_pass_baru) {
				if( $this->model('DataHandle')->ubahPassword ($post) > 0) {
					Flasher::setFlash('Berhasil','diubah','CssUpdate');
					header('Location: ' . BASEURL . '/pengguna/detilProfile/'. $nik .'');
					exit;
			   } else {
					Flasher::setFlash('Password baru','gagal disimpan !','CssHapus');
					header('Location: ' . BASEURL . '/pengguna/detilProfile/'. $nik .'');
					exit;
			   }
			} else {
				Flasher::setFlash('Password baru','tidak sama !','CssHapus');
				header('Location: ' . BASEURL . '/pengguna/detilProfile/'. $nik .'');
				exit;
			}
		
		} else {
			//echo "ehy";
			Flasher::setFlash('Password lama','Salah !','CssHapus');
			header('Location: ' . BASEURL . '/pengguna/detilProfile/'. $nik .'');
		}
	}

	public function resetPass () {
		
	}
}