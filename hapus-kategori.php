<?php
include 'config.php';

if (isset($_GET['idp'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM tb_category WHERE category_id = '" . $_GET['idp'] . "' ");
    echo '<script>window.location="kategori.php";
    alert("Berhasil Hapus Kategori")
    </script>';
    echo '<script>alert("Berhasil")</script>';
}
