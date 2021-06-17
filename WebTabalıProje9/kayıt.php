


<?php

session_start();
include 'baglanti.php';

echo"
<form action='kayıtol.php' method='post'>
  <div class='container'>
    <h1>Kayıt</h1>
    <p>Kayıt olmak için formu doldurunuz.</p>
    <hr>

    <b>Telefon</b>
    <input type='text' placeholder='Telefonunuzu giriniz.' name='Telefon' id='Telefon' >
	

	<b>Şifre</b>
    <input type='password' placeholder='Şifre Giriniz' name='sifre' id='sifre' >

<input type ='submit' values='Gönder'>
   
  </div>

</form>";
?>

