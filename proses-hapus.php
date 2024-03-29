<?php
include 'config.php';

if (isset($_GET['id'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM tb_category WHERE category_id = '" . $_GET['id'] . "' ");
    echo '<script>window.location="kategori.php"</script>';
}

if (isset($_GET['idp'])) {
    $produk = mysqli_query($koneksi, "SELECT gambar_produk FROM tb_produk WHERE id_produk = '" . $_GET['idp'] . "' ");
    $p = mysqli_fetch_object($produk);

    unlink('./produk/' . $p->gambar_produk);

    $delete = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk = '" . $_GET['idp'] . "' ");
    echo
    '<script>window.location="data-menu.php";
     alert("Berhasil Hapus Menu")
    </script>';
}
