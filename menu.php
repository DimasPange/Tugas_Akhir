<?php
error_reporting(0);
include 'config.php';
$kontak = mysqli_query($koneksi, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE id_admin = 1");
$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <link rel="icon" type="image/png" href="img/piya.jpg">
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Piyambakan</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
                        <!-- <ul>
                            <li>
                                Mon-Fri: 8am to 2pm
                            </li>
                            <li>
                                Sat-Sun: 11am to 4pm
                            </li>
                            <li>
                                <a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"><img src="img/cofe.png" width="65px" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#home">Home</a></li>
                        <li><a href="#coffee">Category</a></li>
                        <li><a href="#products">Menu</a></li>

                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-8 mb-1">
                    <!-- <h6 class="text-white text-uppercase">Now you can feel the Energy</h6> -->
                    <h1 class="mb-3" style="margin-top: 20%;">
                        Pilih menu Kami
                    </h1>
                    <!-- <a href="menu.php" class="primary-btn text-uppercase">Buy Now</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- <section class="menu-area section-gap" id="coffee">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>

    </section> -->

    <style>
    /* styling search bar */
    .search {
        padding: 20px 0;
        background-color: #BCA37F;
        border: 1px solid #ccc;
        text-align: center;
    }

    .search input[type="text"] {
        width: 60%;
        padding: 12px;
        border-radius: 20px;
        /* Mengubah sudut border-radius agar lebih melengkung */
        border: 1px solid #ccc;
        /* Menambah border agar terlihat lebih jelas */
        outline: none;
        /* Menghilangkan outline saat di-focus */
        transition: 0.3s;
        /* Efek transisi saat hover */
    }

    .search input[type="submit"] {
        padding: 12px 20px;
        background-color: #C08261;
        color: #fff;
        border: none;
        border-radius: 20px;
        /* Mengubah sudut border-radius agar lebih melengkung */
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        /* Efek transisi saat hover */
    }

    .search input[type="submit"]:hover {
        background-color: #C08261;
        /* Warna latar belakang berubah saat dihover */
    }
    </style>

    <div class="search">
        <div class="container">
            <form action="menu.php">
                <input type="text" name="search" placeholder="Cari Menu..." value="<?php echo $_GET['search'] ?>">
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari Menu">
            </form>
        </div>
    </div>

    <!--row produk-->
    <section class="py-5" id="products">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                // Inisialisasi $where
                $where = "";

                // Cek apakah ada parameter pencarian
                if (isset($_GET['search']) && $_GET['search'] != '') {
                    // Jika ada, tambahkan kondisi pencarian berdasarkan nama_produk
                    $where .= " AND nama_produk LIKE '%" . $_GET['search'] . "%'";
                }

                // Cek apakah ada parameter kategori
                if (isset($_GET['kat']) && $_GET['kat'] != '') {
                    // Jika ada, tambahkan kondisi pencarian berdasarkan category_id
                    $where .= " AND category_id LIKE '%" . $_GET['kat'] . "%'";
                }

                // Buat query SQL
                $query = "SELECT * FROM tb_produk";

                // Jika $where tidak kosong, tambahkan kondisi WHERE ke dalam query
                if ($where != "") {
                    $query .= " WHERE 1 $where";
                }

                // Tambahkan pengurutan
                $query .= " ORDER BY id_produk DESC";

                // Eksekusi query
                $produk = mysqli_query($koneksi, $query);

                if (mysqli_num_rows($produk) > 0) {
                    while ($p = mysqli_fetch_array($produk)) {
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="produk/<?php echo $p['gambar_produk'] ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo substr($p['nama_produk'], 0, 16) ?></h5>
                                <!-- Product price-->
                                Rp. <?php echo number_format($p['harga_produk']) ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="btn-group justify-content-center mb-3">
                            <a href="detail-menu.php?id=<?php echo $p['id_produk'] ?>"><button type="button"
                                    class="btn btn-primary rounded m-1">Detail</button></a>
                            <a
                                href="https://api.whatsapp.com/send?phone=+6287786169689&text=Hai Saya ingin memesan menu <?php echo substr($p['nama_produk'], 0, 16) ?> dengan Harga  Rp. <?php echo number_format($p['harga_produk']) ?>"><button
                                    type="button" class="btn btn-success rounded m-1">Pesan</button></a>
                        </div>

                    </div>
                </div>

                <?php }
                } else { ?>
                <div class="col">
                    <p>Tidak ada produk</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>



    <style>
    /* CSS */
    .card {
        height: 100%;
        width: auto;
    }

    .card-img-top {
        height: 300px;
        /* Atur tinggi gambar sesuai kebutuhan */
        object-fit: cover;
        /* Untuk memastikan gambar tetap proporsional */
    }

    .card-body {
        height: calc(400px - 300px);
        /* Tinggi total card dikurangi tinggi gambar */
        position: relative;
        /* Menjadikan konten card berada di posisi relatif */
        overflow: hidden;
        /* Untuk menghindari konten card yang keluar dari batas card */
    }

    .text-center {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 1rem;
        background-color: rgba(255, 255, 255, 0.8);
        /* Warna latar belakang untuk memudahkan membaca teks */
    }
    </style>



    <!-- start footer Area -->

    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore magna aliqua.
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> SMK PGRI 2 PONOROGO || RPL <i class="fa fa-heart-o" aria-hidden="true"></i> <a
                                href="https://colorlib.com" target="_blank"></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>
                            BUKA JAM 13.00 - 23.00 <br>
                            JL. SUMATRA NO.128 , BANYUDONO</p>
                        <div class="" id="mc_embed_signup">
                            <div style="width: 100%; height: 200px;">
                                <iframe width="100%" height="100%" frameborder="0" style="border:0;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.328407644888!2d111.46552437312256!3d-7.860658678136514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e799f3a8c0cfaaf%3A0xb06653528df8ea0b!2sPiyambakan%20Coffee!5e0!3m2!1sid!2sid!4v1710694137387!5m2!1sid!2sid"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="https://www.instagram.com/piyambakan.co/?hl=id" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.shoppe.com" target="_blank"><i
                                    class="fa-solid fa-bag-shopping"></i></a>
                            <a href="https://gofood.link/a/KTq3jkj" target="_blank"><i
                                    class="fa-solid fa-motorcycle"></i>
                                </i></a>
                            <a href="https://www.tiktok.com/@piy.co" target="_blank"><i class="fa-brands fa-tiktok"></i>
                                </i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>

</body>

</html>