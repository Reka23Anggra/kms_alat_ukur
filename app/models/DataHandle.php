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
        $query = "SELECT * FROM tbl_user WHERE id_user = :id_user AND password = :password";

        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
		$this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();               
    }

    public function getDataLogin($data){
        $this->db->query('SELECT * FROM tbl_user WHERE id_user = :id_user AND password = :password');
        $this->db->bind('id_user', $data['id_user']);
		$this->db->bind('password', $data['password']);
        
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
        $query = "INSERT INTO tbl_user VALUES (:id_user, :nama, :level, :username, :password, :no_hp, :email)";

        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPengguna($data) {
        $query = "UPDATE tbl_user SET id_user = :id_user, nama = :nama, level = :level, username = :username, password = :password,  no_hp = :no_hp, email = :email WHERE id_user = :id_user";
        
        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
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