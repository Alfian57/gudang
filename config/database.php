<?php

$host = "127.0.0.1";
$username = "root";
$password = "root";
$database = "gudang";

$mysqli = mysqli_connect($host, $username, $password, $database);

if (!$mysqli) {
  die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
