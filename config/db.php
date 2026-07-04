<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbdb = 'kopi_senja';

$conn = mysqli_connect($host, $user, $pass, $dbdb);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>