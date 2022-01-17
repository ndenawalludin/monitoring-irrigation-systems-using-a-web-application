<?php
include ("koneksi.php");
$var1 = $_GET['data1'];
$var2 = $_GET['data2'];
mysqli_query($konek, "INSERT INTO sensor(sensor1,sensor2) VALUES('$var1','$var2')");
?>