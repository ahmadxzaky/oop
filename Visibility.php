<?php
class Visibility{
    public $public = 'Public';
    protected $protected = 'protected';
    private $private = 'private';
    function CetakProperti(){
        echo "Akses dari dalam class <br>";
        echo "public : ".$this->public."<br>";
        echo "protected : ".$this->protected."<br>";
        echo "private : ".$this->private."<br>";
    }
    function cetak($lain){
        return$this->protected=$lain;
    }
    function cetakLagi($lain){
        return$this->private=$lain;
    }
}
$obj = new Visibility();
$obj->CetakProperti();
echo "<br> pengaksesan dari luar class <br>";
echo "public : ".$obj->public."<br>";
echo "protected : ".$obj->cetak('password')."<br>";
echo "private : ".$obj->cetakLagi('live')."<br>";
?>