<?php

 session_start(); 
   if ( !isset($_SESSION['telefon']) ) { 
   
     header("Location:girissf.php"); 
   
 exit(); }
include("baglanti.php");

echo "
<form action='randal.php' method='post' >
  <label>
    Randevu Tarihini Giriniz:
    <input type='datetime-local' name='rand' id='rand'>
  </label>

  <p><button>Gönder</button></p>
</form>
";
?>
