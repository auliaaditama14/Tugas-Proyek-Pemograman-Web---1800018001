<?php
echo "<b>Nama      : Aulia Aditama </b><br>";
echo "<b>NIM       : 1800018001 </b><br>";
echo "<b>Slot      : Selasa 09.00 - Lab.Jaringan</b><br>";
echo "<hr width=100%>";
echo "<br>";
$genap  = "";
$ganjil = "";
$i=1;
while($i<=100){
  $i%2==0 ? 
      $genap .= $i." "
  : 
      $ganjil .= $i." ";
  $i++;
}
 
 
echo "<b>Bilangan Genap</b> adalah $genap<br/>";
echo "<b>Bilangan Ganjil</b> adalah $ganjil<br/>";

?>