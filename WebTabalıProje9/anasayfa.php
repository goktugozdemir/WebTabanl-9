<?php 
   
   session_start(); 
   if ( !isset($_SESSION['telefon']) ) { 
   
     header("Location:index.html"); 
   
     exit(); 
   
    } 
 
 echo"
<html>
   <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
      <a href=randevu.php>Randevu Almak için Tıklayınız</a>.<br /><br /> 
	   <a href=randevug.php>Randevularınızı görmek - Silmek - Değiştirmek için Tıklayınız</a>.<br /><br /> 
		
      <a href='cikis.php'>[Çıkış Yap]</a> 
</html>
";
  ?> 