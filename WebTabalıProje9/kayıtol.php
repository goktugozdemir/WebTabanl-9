<?php
session_start();
include 'baglanti.php';


$telefon = $_POST['Telefon'];
$a = $_POST['sifre'];
 $sifre = hash('sha256', $a); 

$required = array('Telefon', 'sifre');
$hata = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $hata = true;
  }
}

if ($hata) {
  echo "Tüm alanlar dolu olmalıdır. <a href='kayıt.php'>Kayıt sayfasına dönmek için tıklayınız</a>";
} 

else{
$kayıt="INSERT INTO giris (Telefon, sifre)
VALUES ('$telefon','$sifre')";

if ($baglanti->query($kayıt) === TRUE) {
  echo "Kaydınız başarı ile yapılmıştır. <a href=anasayfa.php>Ana sayfaya geçmek için tıklayınız</a>";
} else {
  echo "Bir sorun çıktı: ";
}
}
?>