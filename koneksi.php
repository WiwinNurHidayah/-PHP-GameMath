<?php
// host web server
$host = 'localhost';
// username untuk mengakses database
$username = 'root';
// password untuk mengakses database
$pass = '';
// database yang digunakan
$database = 'game';
// script untuk koneksi ke database
$koneksi = mysqli_connect($host,$username,$pass,$database);

// Fngsi tambah data ke tabel pemain
function addPemain($nama, $email, $score){
    $sql = "INSERT INTO pemain (Nama, Email, Score) VALUES('".$nama."','".$email."','".$score."')";
    if (mysqli_query($GLOBALS['koneksi'], $sql)) {
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
      }
    mysqli_close($GLOBALS['koneksi']);
}
?> 
