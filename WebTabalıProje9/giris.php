<?php 
   session_start(); 
   
   require('baglanti.php'); 
   
     
   if (isset($_SESSION['telefon'])){ 
   
   header("anasayfa.php"); 
   exit();
   }
   
   if (isset($_POST['telefon']) and isset($_POST['sifre'])){ 
   
   
   
   $a=$_POST['sifre'];
   $sifre = hash('sha256', $a); 
   $telefon=$_POST['telefon'];
   $sorgu = "SELECT * FROM giris WHERE  Telefon='$telefon' and sifre='$sifre'"; 
   
    
   
   $cevap = mysqli_query($baglanti, $sorgu); 
         
   
   if(!$cevap ){ 
   
       echo '<br>Hata:' . mysqli_error($baglanti); 
   
   } 
   
   
   $say = mysqli_num_rows($cevap); 
   if ($say == 1){ 
       $_SESSION['telefon'] = $telefon; 
	        header('Location: anasayfa.php'); 
   
    }
	else{ 
   $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 
   echo($mesaj);
   
    } 
   
   } 
 ?>