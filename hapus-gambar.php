<?php
include 'config.php';

if (isset($_GET['idg'])) {
    $produk = mysqli_query($koneksi, "SELECT gambar FROM gambar WHERE id_gambar = '" . $_GET['idg'] . "' ");
    $p = mysqli_fetch_object($produk);

    unlink('./gambar/' . $p->gambar);

    $delete = mysqli_query($koneksi, "DELETE FROM gambar WHERE id_gambar = '" . $_GET['idg'] . "' ");
    echo '<script>window.location="gambar.php";
    alert("Berhasil Hapus Gambar")
    </script>';
    echo '<script>alert("Berhasil")</script>';
}
