<?php
function tambah($var1 , $var2){
    $hasil=$var1+$var2;
    return "$var1+$var2=$hasil";
}
function kurang($var1 , $var2){
    $hasil=$var1-$var2;
    return "$var1-$var2=$hasil";
}
function kali($var1 , $var2){
    $hasil=$var1*$var2;
    return "$var1*$var2=$hasil";
}
function bagi($var1 , $var2){
  $hasil=$var1/$var2;
    return "$var1/$var2=$hasil";
}
function sisa($var1 , $var2 ,  $var3){
    $hasil=$var1%$var2%$var3;
    return "$var1%$var2%$var3=$hasil";
}

echo "".tambah(5,5,)."<br>";
echo "".kurang(5,2)."<br>";
echo "".kali(5,7)."<br>";
echo "".bagi(5,2)."<br>";
echo "".sisa (5,2,2)."<br>";

?>  