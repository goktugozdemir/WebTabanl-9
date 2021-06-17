<?php

 session_start(); 
   if ( !isset($_SESSION['telefon']) ) { 
   
     header("Location:index.html"); 
   
 exit(); }
include("baglanti.php");
$telefon=$_SESSION["telefon"];
$sql = "SELECT * FROM rand Where telefon='$telefon'";
$cevap = mysqli_query($baglanti,$sql);
     
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

echo "<html>
<head><meta charset='utf-8'></head>
<body>";
echo "<table border=1>";
echo "<tr><th>Randevu Numaranız</th><th>Randevu Tarihi</th><th>Sil</th><th>Randevu Tarihini Değiştir</th></tr>";

while($gelen=mysqli_fetch_array($cevap))
{
    echo "<tr><td>".$gelen['No']."</td>";
    echo "<td>".$gelen['tarih']."</td>";  
   echo "<td>";
    echo "<form action='rsil.php' method='post'>";
	  $a=$gelen['No'];
      echo " <input type='hidden' id='No' name='name' value='$a'>";
     echo"   <input type='submit' name='submit' value='Sil'>";
    echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='rdeg.php' method='post'>";
	  $a=$gelen['No'];
      echo " <input type='hidden' id='No' name='name' value='$a'>";
     echo"   <input type='submit' name='submit' value='Deg'>";
    echo "</form>";
echo "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($baglanti);
echo "</body>
</html>";
?>
