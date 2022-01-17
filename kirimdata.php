<?php

    //Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elogin";
	
	$temperature = $_GET['temperature'];
	$kelembaban    = $_GET['kelembaban'];
	$defuzzy	 = $_GET['defuzzy'];

    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");

    // Prepare the SQL statement
    
    $result = mysqli_query ($conn,"INSERT INTO pelanggars (temperature, kelembaban, defuzzy) VALUES ('$temperature', '$kelembaban', '$defuzzy')");    
    
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($conn));
        }  
		
	$koneksi = mysqli_connect($servername, $username, $password, $dbname); // menggunakan mysqli_connect
 
	if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>