<?php

class Berkas extends Controller {
   public function index(){
        $data['judul'] = 'Modul Pengetahuan Eksplisit';
		$data['sub_judul'] = 'Modul Pengetahuan';
		$data['data_berkas'] = $this->model('DataHandle')->getBerkas($table = 'tbl_modul');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
    $data['judul'] = 'Tambah Modul Pengetahuan';
    $data['sub_judul'] = 'Tambah Data Modul';
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('berkas/v_tambah_berkas',$data);
    $this->view('templates/footer');
    }


    public function tambahBerkas()
    {
        $id_modul = $_POST['id_modul'];
		$id_eksplisit = $_POST['id_eksplisit'];
        $nm_alat = $_POST['nm_alat'];
		
		
		$ekstensi_benar	= array('pdf');
		$nama = $_FILES['modul']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['modul']['size'];
		$file_tmp = $_FILES['modul']['tmp_name'];
		if (in_array($ekstensi, $ekstensi_benar) === true){
			if ($ukuran < 1044070){
				$nama = md5($nama);
				move_uploaded_file($file_tmp, 'files/'.$nama);

				$data = array(
					'id_modul' => $id_modul,
					'id_eksplisit' => $id_eksplisit,
					'nm_alat' => $nm_alat,
					'modul' => $nama,
					
				 );

				if ( $this->model('DataHandle')->tambahDataBerkas($data) > 0) {
					Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/Berkas/index/'. $id_modul .'');
					 exit;
				} else {
					Flasher::setFlash('gagal','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/Berkas/index/'. $id_modul .'');
					exit;
				}
					
			}
			else{
				Flasher::setFlash('Ukuran File','Terlalu Besar','CssTambah');
				header('Location: ' . BASEURL . '/Berkas/index/'. $id_modul .'');
				exit;
			}
		}
		else {
			Flasher::setFlash('Format File','Tidak diijinkan','CssTambah');
			header('Location: ' . BASEURL . '/Berkas/index/'. $id_modul .'');
			exit;
		}
	}

    

}