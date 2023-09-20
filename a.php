<?php
class manusia{
     var $namalengkap;
     var $warnarambut;
     var $umur;

 function tampilData($tambahUmur) {
     $this->umur = 10;
     $this->umur = $this->umur + $tambahUmur;
     return $this->umur;
 }
 function __construct() {
     echo "saya kontruktor<br>";
 }
 function __destruct() {
     echo "saya destruktor<br>";
 }
}
  $zaky = new manusia();
  $zaky ->namalengkap = 'Ahmad Zaky';
  $zaky ->warnarambut = 'hitam';
  $zaky ->umur = '17';
  $nabil = new manusia ();
  echo $zaky ->namalengkap = 'Ahmad Zaky';
  echo $zaky ->nama($zaky ->namalengkap);
  echo "<br>";
  echo $nabil ->namalengkap = 'Hammad Nabil Khairy';
  echo $nabil ->nama($nabil ->namalengkap);
 ?>