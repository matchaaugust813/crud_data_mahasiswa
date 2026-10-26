<?php

$koneksi = mysqli_connect("localhost", "root", "", "crud_mhs");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


?>