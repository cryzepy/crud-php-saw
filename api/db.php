<?php

$servername = "sql313.infinityfree.com";
$username = "if0_37545773";
$password = "FRK2tcJvIxo8";
$dbname = "if0_37545773_sistem_aplikasi_web";   

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}
?>