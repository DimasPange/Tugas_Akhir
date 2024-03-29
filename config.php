<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'piyambakan');

if (!$koneksi) {
    die("Gagal:" . mysqli_connect_error());
}