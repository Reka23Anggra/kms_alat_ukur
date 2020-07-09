<?php 

class Dashboard extends Controller {
	public function __construct(){
		if(!isset($_SESSION["id_user"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
		
	}
	
	public function index () {
        $data['judul'] = 'Dashboard';
        $data['data_pengguna'] = $this->model('DataHandle')->getAll($table = 'tbl_user');;
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar',$data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}