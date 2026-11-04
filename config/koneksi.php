<?php

$servername = "localhost";
$database = "contohsi32";
$username = "root";
$password = "";

// membuat koneksi 
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Koneksi Gagal: ". mysqli_connect_error());
}
echo "Koneksi Berhasil";
mysqli_close($conn);

?>