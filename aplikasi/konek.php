<?php

class Database
{
    private $host = "localhost", $username = "root", $password = "", $db = "db_publik", $conn;
     // ini adalah salah satu contoh yang menerapkan konsep encapsulation yang dimana host,username,password, dan db dan conn nya itu bersifat privat yang artinya kita membatasi akses langsung dari luar kelas jadi hanya method yang ada didalam kelas database saja yang dapat mengakses atribut ini.

    public function __construct()
    {
       
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    
    public function getKonek()
    {
        return $this->conn;
    }
}
?>
