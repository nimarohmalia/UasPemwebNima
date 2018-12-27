

<?php
// deklarasi parameter koneksi database
$server   = "sql308.epizy.com";
$username = "epiz_23204543";
$password = "8XOHJR7eu";
$database = "epiz_23204543_nima";

// koneksi database
$mysqli = new mysqli($server, $username, $password, $database);

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}
?>