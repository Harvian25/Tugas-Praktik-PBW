<?php
$servername = "localhost";
$database = "tugasapi";
$username = "root";
$password = "12345678";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("koneksi tidak berhasil");
}
