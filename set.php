<?php

class nilaisiswa{
       private $harian , $atsGanjil , $aasGanjil , $atsGenap , $aasGenap;

       public function setharian($harian) {
         $this->harian = $harian;
       }
       public function getharian() {
        return $this->harian;
       }

       public function setatsGanjil($ATSGJ) {
        $this->atsGanjil = $ATSGJ;
      }
      public function getatsGanjil() {
       return $this->atsGanjil;
      }

      public function setaasGanjil($AASGJ) {
        $this->aasGanjil = $AASGJ;
      }
      public function getaasGanjil() {
       return $this->aasGanjil;
      }

      public function setatsGenap($ATSGP) {
        $this->atsGenap = $ATSGP;
      }
      public function getatsGenap() {
       return $this->atsGenap;
      }

      public function setaasGenap($AASGP) {
        $this->aasGenap = $AASGP;
      }
      public function getaasGenap() {
       return $this->aasGenap;
      }
     public function rata2(){
        $akhir = ($this->getharian()+$this->getatsGanjil()
        +$this->getaasGanjil()+$this->getatsGenap()+$this->getaasGenap())/5;
        echo "nilai Akhir".$akhir."<br>";
        if($akhir>75){
            echo "peserta didik : Lulus";
        }elseif($akhir<75){
            echo "status peserta didik : peserta perlu pendidikan lebih";
        }
    }
}
$akmal = new nilaisiswa();
$Rasheed = new nilaisiswa();
$nabil = new nilaisiswa();
$ceska = new nilaisiswa();
$ruhul = new nilaisiswa();

echo "<b>Nilai Akmal</b><br>";
$akmal->setharian(100);
echo "nilai harian akmal :   ".$akmal->getharian()."<br>";
$akmal->setatsGanjil(100);
echo "nilai ATS Ganjil akmal :   ".$akmal->getharian()."<br>";
$akmal->setaasGenap(100);
echo "nilai AAS Genap akmal :   ".$akmal->getharian()."<br>";
$akmal->setatsgenap(100);
echo "nilai ATS Genap akmal :   ".$akmal->getharian()."<br>";
$akmal->setaasGanjil(100);
echo "nilai AAS Ganjil akmal :   ".$akmal->getharian()."<br>";
echo "rata-rata nilai".$akmal->rata2()."<br>";
//nilai Rasheed
echo "<hr>";
echo "<b>Nilai Rasheed</b><br>";
$Rasheed->setharian(100);
echo "nilai harian Rasheed :   ".$Rasheed->getharian()."<br>";
$Rasheed->setatsGanjil(100);
echo "nilai ATS Ganjil Rasheed :   ".$Rasheed->getharian()."<br>";
$Rasheed->setaasGenap(100);
echo "nilai AAS Genap Rasheed :   ".$Rasheed->getharian()."<br>";
$Rasheed->setatsgenap(100);
echo "nilai ATS Genap Rasheed :   ".$Rasheed->getharian()."<br>";
$Rasheed->setaasGanjil(100);
echo "nilai AAS Ganjil Rasheed :   ".$Rasheed->getharian()."<br>";
//nilai nabil
echo"<hr>";
echo "<b>Nilai Nabil</b><br>";
$nabil->setharian(100);
echo "nilai harian nabil :   ".$nabil->getharian()."<br>";
$nabil->setatsGanjil(100);
echo "nilai ATS Ganjil nabil :   ".$nabil->getharian()."<br>";
$nabil->setaasGenap(100);
echo "nilai AAS Genap nabil :   ".$nabil->getharian()."<br>";
$nabil->setatsgenap(100);
echo "nilai ATS Genap nabil :   ".$nabil->getharian()."<br>";
$nabil->setaasGanjil(100);
echo "nilai AAS Ganjil nabil :   ".$nabil->getharian()."<br>";
//nilai ceska
echo"<hr>";
echo "<b>Nilai Ceska</b><br>";
$ceska->setharian(100);
echo "nilai harian ceska :   ".$ceska->getharian()."<br>";
$ceska->setatsGanjil(100);
echo "nilai ATS Ganjil ceska :   ".$ceska->getharian()."<br>";
$ceska->setaasGenap(100);
echo "nilai AAS Genap ceska :   ".$ceska->getharian()."<br>";
$ceska->setatsgenap(100);
echo "nilai ATS Genap ceska :   ".$ceska->getharian()."<br>";
$ceska->setaasGanjil(100);
echo "nilai AAS Ganjil ceska :   ".$ceska->getharian()."<br>";
//nilai ruhul
echo"<hr>";
echo "<b>Nilai Ruhul</b><br>";
$ruhul->setharian(100);
echo "nilai harian ruhul :   ".$ruhul->getharian()."<br>";
$ruhul->setatsGanjil(100);
echo "nilai ATS Ganjil ruhul :   ".$ruhul->getharian()."<br>";
$ruhul->setaasGenap(100);
echo "nilai AAS Genap ruhul :   ".$ruhul->getharian()."<br>";
$ruhul->setatsgenap(100);
echo "nilai ATS Genap ruhul :   ".$ruhul->getharian()."<br>";
$ruhul->setaasGanjil(100);
echo "nilai AAS Ganjil ruhul :   ".$ruhul->getharian()."<br>";
?>