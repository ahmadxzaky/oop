<?php
$username = $_POST['nama'];
$password = $_POST['password'];
// echo $username."<br>".$user;      

class user{
    public $nama, $sandi;

    function setUser($nama, $sandi){
        $this->nama = $nama;
        $this->sandi = $sandi;
    }
    function validasi(){
        if($this->nama == "" && $this->sandi ==""){
            echo "Username dan sandi belum di isi";
        }elseif($this->sandi == ""){
            echo "Sandi Belum Di Isi";
        }elseif($this->nama == ""){
            echo "username belum di isi!";
        }else{
            // echo "Selamat datang ";
            // echo $this->nama;
            include_once "koneksi2.php";
            $server1 = new koneksi();

            $query = "select *  from tb_login";
            $sql = mysqli_query($server1->server(),$query);

            if(mysqli_num_rows($sql) > 0){
                echo "Tidak ada data";
            }else{
                header('location:dasboard.php');
            }
        }
    }
}
$login = new user;
$login->setUser($username,$password);
$login->validasi();
?>