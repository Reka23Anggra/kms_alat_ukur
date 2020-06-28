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

    public function AmbilDataMax($table, $id_table)
    {
        $query = "select max ('' . $id_table . '') from ' . $table . '";
        $this->db->execute();

        return $this->db->single();
    }

    public function tambahDataTacit($data)
     {
            // var_dump ($data);
        $query = "INSERT INTO tbl_tacit VALUES (:id_tacit, :id_user, :nama, :nm_alat, :fungsi, :penggunaan_alat, :perawatan_alat, :satuan)";

        $this->db->query($query);
        $this->db->bind('id_tacit', $data['id_tacit']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nm_alat', $data['nm_alat']);
        $this->db->bind('fungsi', $data['fungsi']);
        $this->db->bind('penggunaan_alat', $data['penggunaan_alat']);
        $this->db->bind('perawatan_alat', $data['perawatan_alat']);
        $this->db->bind('satuan', $data['satuan']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function ubahDataTacit($data)
    {
        $query = "UPDATE tbl_tacit SET id_tacit = :id_tacit, id_user = :id_user, nama = :nama, nm_alat = :nm_alat, fungsi = :fungsi,  penggunaan_alat = :penggunaan_alat, perawatan_alat = :perawatan_alat, satuan = :satuan WHERE id_tacit = :id_tacit";

        $this->db->query($query);
        $this->db->bind('id_tacit', $data['id_tacit']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nm_alat', $data['nm_alat']);
        $this->db->bind('fungsi', $data['fungsi']);
        $this->db->bind('penggunaan_alat', $data['penggunaan_alat']);
        $this->db->bind('perawatan_alat', $data['perawatan_alat']);
        $this->db->bind('satuan', $data['satuan']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataEksplisit($data)
    {
        $query = "INSERT INTO tbl_eksplisit VALUES (:id_eksplisit, :kd_buku, :nm_alat, :fungsi, :penggunaan_alat, :perawatan_alat, :satuan, :thn_terbit, :penulis)";

        $this->db->query($query);
        $this->db->bind('id_eksplisit', $data['id_eksplisit']);
        $this->db->bind('kd_buku', $data['kd_buku']);
        $this->db->bind('nm_alat', $data['nm_alat']);
        $this->db->bind('fungsi', $data['fungsi']);
        $this->db->bind('penggunaan_alat', $data['penggunaan_alat']);
        $this->db->bind('perawatan_alat', $data['perawatan_alat']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('thn_terbit', $data['thn_terbit']);
        $this->db->bind('penulis', $data['penulis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataEksplisit($data)
    {
        $query = "UPDATE tbl_eksplisit SET id_eksplisit = :id_eksplisit, kd_buku = :kd_buku, nm_alat = :nm_alat, fungsi = :fungsi,  penggunaan_alat = :penggunaan_alat, perawatan_alat = :perawatan_alat, satuan = :satuan, thn_terbit = :thn_terbit, penulis = :penulis WHERE tbl_eksplisit = :tbl_eksplisit";

        $this->db->query($query);
        $this->db->bind('id_eksplisit', $data['id_eksplisit']);
        $this->db->bind('kd_buku', $data['kd_buku']);
        $this->db->bind('nm_alat', $data['nm_alat']);
        $this->db->bind('fungsi', $data['fungsi']);
        $this->db->bind('penggunaan_alat', $data['penggunaan_alat']);
        $this->db->bind('perawatan_alat', $data['perawatan_alat']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('thn_terbit', $data['thn_terbit']);
        $this->db->bind('penulis', $data['penulis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}