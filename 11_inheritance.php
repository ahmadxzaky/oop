<?php
include_once("10_inheritance.php")

class pplg extends smk{
    private$laptop, $tv;

    function setJumlahLaptop($laptop){
        echo "<br> Jumlah laptop : ".$this->laxptop = $laptop;
    }
    function setJumlahTv($tv){
        echo "<br> jumlah tv : ".$this = $tv;
    }
}

class tjkt extends smk{
    private$pc, $router;

    function setJumlahPc($pc){
        echo "<br> jumlah pc :".$this = $pc;
    }
    function setJumlahRouter($router){
        echo "<br> jumlah Router :".$this = $router;
    }
}

$pplg11 = new pplg ("PPLG","XI","Ahmad Istaqim","106");
echo $pplg11->namaJurusan();
$pplg11->setJumlahLaptop(11);
$pplg11->setJumlahTv(1);
$tjkt10 = new tjkt ("tjkt", "x", "Inda Maulana", "107"); 

?>