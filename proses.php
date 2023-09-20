<?php
$username = $_POST['username'];
$password = $_POST['password'];

class User {
    public $pengguna, $sandi;

    function setUser($pengguna, $sandi) {
        $this->pengguna = $pengguna;
        $this->sandi = $sandi;

    }
    
    function ValidasiData(){
        if($this->pengguna == ""){
            echo "nama tidak boleh kosong";
        }else if ($this->sandi == ""){
            echo "password tidak boleh kosong";
        }else if($this->pengguna == "" && $this->sandi == ""){
            echo "nama pengguna dan password tidak boleh kosong!";
        }else{
            include_once "koneksi.php";
            $serverQ = new koneksi();

            $query = "select * from tb_login";
            $sql = mysqli_query($serverQ->server(), $query);

            if ( mysqli_num_row($sql) > 0 ) {
                echo "tidak ada data";
            }else{
                header('location:dashboard.php');
            }
        }
    }
}