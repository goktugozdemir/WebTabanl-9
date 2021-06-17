<?php

 session_start(); 
   if ( !isset($_SESSION['telefon']) ) { 
   
     header("Location:girissf.php"); 
   
 exit(); }
include("baglanti.php");
$telefon=$_SESSION["telefon"];
$tarih=date("Y-m-d H:i:s", strtotime($_POST["rand"]));
$sql="INSERT INTO rand (tarih,Telefon)VALUES('$tarih','$telefon')";
if ($baglanti->query($sql) === TRUE) {
  echo "Randevunuz başarı ile alınmıştır. <a href=anasayfa.php>Ana sayfaya geçmek için tıklayınız</a>";
} else {
  echo "Bir sorun çıktı: ";
}
?>