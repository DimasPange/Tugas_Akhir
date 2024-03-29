<?php
error_reporting(0);
include 'config.php';
$kontak = mysqli_query($koneksi, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE id_admin = 1");
$a = mysqli_fetch_object($kontak);

$produk = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk = '" . $_GET['id'] . "'");
$p = mysqli_fetch_object($produk); ?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
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
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/piya.jpg">
    <!-- Site Title -->
    <title>Piyambakan</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
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
    <link rel="stylesheet" href="css/animate.mi,n.css">
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
                        Detail Produk Kami
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
    <br>

    <!--row produk-->
    <section class="product" id="products">
        <div class="container">
            <div class="row justify-content-center centered-content ml-5">
                <!-- Tambahkan kelas centered-content di sini -->
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-lg">
                        <img src="produk/<?php echo $p->gambar_produk ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-center">
                            <h1 class="card-title mb-2"><?php echo $p->nama_produk ?></h1>
                            <h3 class="card-price mb-3">Rp. <?php echo number_format($p->harga_produk) ?></h3>
                            <h4 class="card-text"><?php echo $p->deskripsi_produk ?></h4>

                            <p class="card-date mb-2"><?php echo $p->date_created ?></p>
                            <a href="menu.php" class="btn btn-primary rounded-pill">Kembali</a>

                            <a href="https://api.whatsapp.com/send?phone=+6287786169689&text=Hai Saya ingin memesan menu <?php echo $p->nama_produk ?> dengan Harga  Rp.  <?php echo number_format($p->harga_produk) ?>"
                                class="btn btn-success rounded-pill">
                                Pesan</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
    .products .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
        gap: 1.5rem;
        margin-top: 3rem;
    }

    .products .product-card {
        text-align: center;
        border: 1px solid #666;
        padding: 2rem;
    }

    .products .product-icons {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }

    .products .product-icons a {
        width: 4rem;
        height: 4rem;
        color: #fff;
        margin: 0.3rem;
        border: 1px solid #666;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .products .product-image {
        padding: 1rem 0;

    }

    .products .product-image img {
        height: 25rem;

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