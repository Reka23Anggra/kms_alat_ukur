<?php

class Login extends Controller {
    public function index (){
		$this->view('login/index');
	}

	public function cekLogin() {


		$idUser = $_POST["id_user"];
		$password = $_POST["password"];
		
		// GET DATA USER
		$post = array(
			'id_user' => $idUser,
			'password' => $password
		);

		$data['pengguna'] = $this->model('DataHandle')->getDataLogin($post);
		
		$pengguna = $this->model('DataHandle')->cekDataLogin($post);
		if( $this->model('DataHandle')->cekData($table = 'tbl_user') > 0) {
			// login pertama
			if( $this->model('DataHandle')->cekDataLogin($post) > 0) {
						
				$_SESSION['id_user'] = $data['pengguna']['id_user'];
				$_SESSION['level'] = $data['pengguna']['level'];
				$_SESSION['username'] = $data['pengguna']['username'];
				$_SESSION['nama'] = $data['pengguna']['nama'];
				//$nik = $data['pengguna']['id_user'];

				//masukan data ke log masuk
				//$this->model('DataHandle')->simpanDataLogin($nik);

				
				//$this->view('dashboard/index', $data_user);
				header('Location: ' . BASEURL . '/Pengguna/index/');
			
			} else {
				//echo "ehy";
				header('Location: ' . BASEURL . '/login/index');
			}
		} else {
			$_SESSION['role_user'] = "SuperAdmin";
			$_SESSION['nama'] = "SuperAdmin";
			$_SESSION["username"] = "SuperAdmin";

			header('Location: ' . BASEURL . '/Pengguna/buatAdmin');
		}
		
		
	}

	public function logout () { 
 		session_destroy();  
 		header('Location: ' . BASEURL . '/login/index');
	}
}