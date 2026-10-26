<?php

$servername = "localhost";
$database = "si 31";
$username = "root";
$password = "";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// cek koneksi
if(!$conn){
    die("Koneksi Gagal:". mysqli_connect_error());
}

echo "Koneksi Berhasil";
mysqli_close($conn);

?>