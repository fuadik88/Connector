<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$baglan = mysql_connect("localhost","root",'');
mysql_select_db("phpconnect", $baglan);


$bul = mysql_query("SELECT * From php order by ID DESC");

while($yazdir = mysql_fetch_array($bul)){

$id = $yazdir['ID'];
$adi = $yazdir['ad'];        //Boyuk moterizedekiler mysql setir adlari
$soyadi = $yazdir['soyad'];

echo"$adi $soyadi </br>";

}



 ?>
