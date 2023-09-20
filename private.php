<?php
class mobil{
    private $warna;

    function tampil(){
        $this->warna="biru";
        echo $this->warna;

    }
};
$GTR = new mobil();
echo $GTR->tampil();
?>