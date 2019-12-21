<?php
// config
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "count";
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// mengecek koneksi
if (!$koneksi) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

