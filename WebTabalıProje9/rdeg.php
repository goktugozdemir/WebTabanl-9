<?php

 session_start(); 
   if ( !isset($_SESSION['telefon']) ) { 
   
     header("Location:index.html"); 
   
 exit(); }
include("baglanti.php");
$_SESSION["no"]=$_POST['name'];
echo "
<form action='rdegyap.php' method='post' >
  <label>
    Yeni Randevu Tarihini Giriniz:
    <input type='datetime-local' name='rand' id='rand'>
  </label>

  <p><button>Gönder</button></p>
</form>
";
?>
