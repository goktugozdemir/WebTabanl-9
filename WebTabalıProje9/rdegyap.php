<?php

 session_start(); 
   if ( !isset($_SESSION['telefon']) ) { 
   
     header("Location:index.html"); 
   
 exit(); }
include("baglanti.php");
$no=$_SESSION["no"];
$tarih=date("Y-m-d H:i:s", strtotime($_POST["rand"]));
$sql="UPDATE rand
SET tarih = '$tarih'
WHERE No = '$no'";
if ($baglanti->query($sql) === TRUE) {
  echo "Randevu tarihiniz başarı ile değiştirilmiştir.. <a href=anasayfa.php>Ana sayfaya geçmek için tıklayınız</a>";
} else {
  echo "Bir sorun çıktı: ";
}
?>