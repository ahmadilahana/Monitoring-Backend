<?php

class Login_model
{
    private $table = "tb_akun";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function daftarAkun()
    {
        $query = "insert into tb_user (nama,username,email,pass) values (:nama,:username,:email,:pass)";
        $this->db->query($query);
        $this->db->bind('nama', $_POST['nama']);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('email', $_POST['email']);
        $this->db->bind('pass', password_hash($_POST['pass'], PASSWORD_DEFAULT));

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cekAkun()
    {
        $query = "select * from tb_user where username = :username";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $cek = $this->db->single();
        if ($cek>=1) {
            if (password_verify($_POST['pass'], $cek['pass'])) {
                return [true, $cek];
            } else {
                return [false];
            }
            
        } else {
            return ["null"];
        }
        
    }
}

?>