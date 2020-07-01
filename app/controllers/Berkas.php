<?php

class Berkas extends Controller {
	public function __construct(){
		if(!isset($_SESSION["id_user"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}	
	}

   public function index(){
        $data['judul'] = 'Modul Pengetahuan Eksplisit';
		$data['sub_judul'] = 'Modul Pengetahuan';
		$data['data_berkas'] = $this->model('DataHandle')->getAll($table = 'tbl_modul');
		// $data['data_berkas'] = $this->model('DataHandle')->getAllById($table='tbl_modul', $id_table='id_', $id=$id_);
		
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
		$file = $_FILES['modul']['name'];
		$x = explode('.', $file);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['modul']['size'];
		$file_tmp = $_FILES['modul']['tmp_name'];
		if (in_array($ekstensi, $ekstensi_benar) === true){
			if ($ukuran < 9044070){
				$file = $nm_alat .'.'. $ekstensi;
				move_uploaded_file($file_tmp, '../app/berkas/'.$file);

				$data = array(
					'id_modul' => $id_modul,
					'id_eksplisit' => $id_eksplisit,
					'nm_alat' => $nm_alat,
					'modul' => $file,
					
                 );
                 //var_dump($_POST);

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

	public function getDetil($id){
		$data['judul'] = 'Modul Pengetahuan';
        $data['sub_judul'] = 'Data Modul Pengetahuan';
		$data['data_berkas'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_modul',$id_table = 'id_modul', $id);

		$jumlah = $data['data_berkas']['modul'] + 1;
		$this->model('DataHandle')->hitungLihat($id,$jumlah);

		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/v_lihat', $data);
        $this->view('templates/footer');
	}

	public function getBerkas($id){

		$data['judul'] = 'Modul Pengetahuan';
        $data['sub_judul'] = 'Data Modul Pengetahuan';
        $data['data_berkas'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_modul',$id_table = 'id_modul', $id);
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('berkas/v_lihat', $data);
        $this->view('templates/footer');
	}
	

}