<?php
$server = 'sql11.freemysqlhosting.net';
$user = 'sql11419772';
$password = 'X4UdVPv6et';
$database = 'dis';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti) {
    echo "MySQL sunucu ile baglanti kurulamadi! </br>";
    echo "HATA: " . mysqli_connect_error();
    exit;
}

?>
