<?php
//mengkonfigurasikan database
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "db_bandha";

//perintah untuk  akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
if (!$koneksi){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>