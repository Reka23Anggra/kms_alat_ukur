<?php

class DataHandle {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //General Query
    public function getAll($table) {
        $this->db->query('SELECT * FROM ' . $table);
        return $this->db->resultSet();
    }
   
    public function getAllById($table, $id_table, $id) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id_table . '= :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getAllWhere ($table, $id_table, $id) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id_table . '= :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllByAsc($table, $orderBy) {
        $this->db->query('SELECT * FROM ' . $table . ' ORDER BY '. $orderBy .' ASC ');
        return $this->db->resultSet();
    }
    
    public function hapusData($id, $table, $id_table){
        $query = "DELETE FROM $table  WHERE $id_table = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekData($table){
        $query = "SELECT * FROM $table";

        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekDataLogin($data){
        $query = "SELECT * FROM tbl_pengguna WHERE username = :username AND pass = :pass";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
		$this->db->bind('pass', $data['pass']);

        $this->db->execute();

        return $this->db->rowCount();               
    }

    public function getDataLogin($data){
        $this->db->query('SELECT * FROM tbl_pengguna WHERE username = :username AND pass = :pass');
        $this->db->bind('username', $data['username']);
		$this->db->bind('pass', $data['pass']);
        
        return $this->db->single(); 
    }

    public function simpanDataLogin($nik){
        $query = "INSERT INTO tbl_log VALUES ('', :nik, :waktu)";

        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->bind('waktu', date("Y-m-d H:i:s"));
        

        $this->db->execute();

        return $this->db->rowCount();
    }




    // Spesifik Query Pengguna
    public function tambahDataPengguna($data) {
        $query = "INSERT INTO tbl_pengguna VALUES (:nik, :nama, :jk, :username, :pass, :unit, :jabatan, :role_user, :no_hp, :email)";

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('unit', $data['unit']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPengguna($data) {
        $query = "UPDATE tbl_pengguna SET nik = :nik, nama = :nama, jk = :jk, username = :username, unit = :unit, jabatan = :jabatan, role_user = :role_user, no_hp = :no_hp, email = :email WHERE nik = :nik";
        
        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        // $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('unit', $data['unit']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahPassword($data) {
        $query = "UPDATE tbl_pengguna SET pass = :pass WHERE nik = :nik";
        
        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('pass',$data['pass_baru']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}