<?php
session_start(); 
   if ( !isset($_SESSION['telefon']) ) { 
   
     header("Location:girissf.php"); 
   
 exit(); }
include("baglanti.php");

$b=$_POST['name'];
$query = "DELETE FROM rand WHERE No='$b' LIMIT 1";

mysqli_query ($baglanti,$query);

if (mysqli_affected_rows($baglanti) == 1) { 

            echo"<strong>Randevunuz Silinmiştir</strong><br /><br /><a href=anasayfa.php>Anasayfaya Dönmek için basınız</a>";

 } else { 


           echo" <strong>Silinememiştir.</strong><br /><br />";

} 
?>