<?php
$server = "localhost"; //nama server
$username = "root"; // username 
$password = "123"; //  standarnya kosong
$database = "dbcrud"; // buat nama database harus sama 

// Koneksi dan memilih database di server menggunakan MySQLi
$connection = mysqli_connect($server, $username, $password, $database);

// Cek koneksi
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

mysql_select_db($database) or die("Database can't be opened");
?>

71urlkufpsdnlkadsf 