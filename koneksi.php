<?php
$servername = "localhost";
$database = "monitoring";
$username = "root";
$password = "";
$konek = mysqli_connect ($servername, $username, $password, $database);
if ($konek!=false){
echo "berhasil";
} else {
echo "gagal";}
?>