<?php
include 'config.php';
$kontak = mysqli_query($koneksi, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE id_admin = 1");
$a = mysqli_fetch_object($kontak);
?>
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
    <link rel="icon" type="image/png" href="img/piya.jpg"> <!-- Ganti 'favicon.png' dengan nama file ikon Anda -->

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
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="menu.php">Menu</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->


    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-7">
                    <!-- <h6 class="text-white text-uppercase">Now you can feel the Energy</h6> -->
                    <h1 class="mb-3" style="margin-top: 20%;">
                        <!-- Tambahkan margin-top di sini -->
                        Piyambakan Coffee <br>
                        And Space
                    </h1>

                    <a href="menu.php" class="primary-btn text-uppercase">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start video-sec Area -->
    <!-- <section class="video-sec-area pb-100 pt-40" id="about">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid"
                            src="img/play-icon.png" alt=""></a>
                </div>
                <div class="col-lg-6 video-left">
                    <h6>Live Coffee making process.</h6>
                    <h1>We Telecast our <br>
                        Coffee Making Live</h1>
                    <p><span>We are here to listen from you deliver exellence</span></p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim.
                    </p>
                    <img class="img-fluid" src="img/signature.png" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- End video-sec Area -->

    <!-- Start menu Area -->
    <section class="menu-area section-gap" id="coffee">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Kategori Menu</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="single-menu">

                <div class="row justify-content-center menu-boxes">
                    <?php
                    $kategori = mysqli_query($koneksi, "SELECT * FROM tb_category ORDER BY category_id DESC");

                    if (mysqli_num_rows($kategori) > 0) {
                        while ($k = mysqli_fetch_array($kategori)) {
                    ?>
                    <div class="col-md-6 col-lg-3 justify-content-center align-items-center">
                        <div class="box">
                            <a href="menu.php?kat=<?php echo $k['category_id'] ?>"><button type="button"
                                    class="btn btn-outline-secondary btn-lg"><?php echo $k['category_name'] ?></button></a>
                        </div>
                    </div>
                    <?php }
                    } else { ?>
                    <p>Kategori Tidak ada</p>
                    <?php } ?>
                </div>
            </div>
        </div>


    </section>

    <style>
    /* CSS untuk style kotak */
    /* CSS untuk style kotak */
    .box {
        border: 1px solid #eaeaea;
        /* Tambahkan garis untuk memisahkan kotak */
        padding: 20px;
        box-sizing: border-box;
        border-radius: 10px;
        /* Tambahkan sudut yang melengkung */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Tambahkan bayangan untuk efek ketinggian */
        transition: box-shadow 0.3s ease;
        /* Efek transisi saat hover */
        text-align: center;
        /* Tengahkan teks di dalam box */

    }

    .box:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        /* Perbesar bayangan saat dihover */
    }

    .menu-boxes {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 20px;
    }

    .col-md-6 {
        flex-basis: calc(50% - 20px);
        /* 50% minus space between */
        margin-bottom: 20px;
    }

    .col-lg-3 {
        flex-basis: calc(33.33% - 20px);
        /* 33.33% minus space between */
        margin-bottom: 20px;
    }

    .btn {
        /* background-color: ; */
        /* Warna latar belakang tombol */
        color: #8C6A5D;
        /* Warna teks tombol */
        border: none;
        text-align: center;
        align-items: center;
        font-weight: 500;

        padding: 12px 20px;
        /* Sesuaikan padding agar tombol terlihat lebih besar */
        border-radius: 5px;
        /* Tambahkan sudut yang melengkung pada tombol */
        font-size: 20px;
        /* Sesuaikan ukuran huruf tombol */
        transition: background-color 0.3s ease;
        /* Efek transisi saat hover */
    }

    .btn:hover {
        font-weight: bold;
        background-color: #7E6363;
        /* Perbesar bayangan saat dihover */
    }

    @media (max-width: 991.98px) {
        .col-md-6 {
            flex-basis: calc(50% - 20px);
            /* 50% minus space between */
        }
    }

    @media (max-width: 767.98px) {
        .col-md-6 {
            flex-basis: calc(100% - 20px);
            /* 100% minus space between */
        }
    }
    </style>

    <!-- End menu Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $q = mysqli_query($koneksi, "SELECT * FROM gambar");
                $data = [];

                while ($r = mysqli_fetch_assoc($q)) {
                    $data[] = $r;
                }
                $mas = $data;

                foreach ($mas as $m) :
                ?>
                <div class="col-lg-4">
                    <a href="gambar/<?php echo $m['gambar'] ?>" class="img-pop-home">
                        <img class="img-fluid" src="gambar/<?php echo $m['gambar'] ?>" alt="">
                    </a>
                </div>
                <?php endforeach ?>
            </div>

        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End gallery Area -->


    <!-- Start review Area -->
    <section class="review-area section-gap text-center" id="about">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">About</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="img/piya.jpg" alt="">
                    <div class="title text-center align-center ml-10">
                        <h4>Piyambakan Coffe</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <p class="title text-center">
                        Piyambakan Coffee adalah kedai kopi yang menawarkan berbagai macam minuman kopi dan makanan
                        ringan. Dengan fokus pada penyajian kopi berkualitas tinggi, Piyambakan Coffee mengutamakan
                        bahan-bahan berkualitas dan proses pembuatan yang teliti untuk menyajikan pengalaman kopi yang
                        memuaskan bagi pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- End review Area -->

    <!-- Start blog Area -->
    <!-- <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="img/b1.jpg" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#">
                        <h4>Portable latest Fashion for young women</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="img/b2.jpg" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#">
                        <h4>Portable latest Fashion for young women</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End blog Area -->


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Awal berdiri 11 Februari 2022. dengan konsep caffe rumah tumbuh( Bertumbuh) <br>
                            #temanpiyambakan <br>
                            #ngopidigang
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