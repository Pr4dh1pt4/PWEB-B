<?php
$host       = "127.0.0.1";
$user       = "root";
$password   = "";
$database   = "sekolah";

$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>