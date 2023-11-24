<?php
include("../koneksi.php");
session_start();
if (isset($_SESSION["level"]) && $_SESSION["username"]) {
    if ($_SESSION["level"] == "user") {
?>
        <!doctype html>
        <html class="no-js" lang="zxx">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Website Beritaku</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="manifest" href="site.webmanifest">
            <link rel="shortcut icon" type="/x-icon" href="assets/img/favicon.ico">

            <!-- CSS here -->
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../assets/css/ticker-style.css">
            <link rel="stylesheet" href="../assets/css/flaticon.css">
            <link rel="stylesheet" href="../assets/css/slicknav.css">
            <link rel="stylesheet" href="../assets/css/animate.min.css">
            <link rel="stylesheet" href="../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/css/slick.css">
            <link rel="stylesheet" href="../assets/css/nice-select.css">
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="stylesheet" href="../assets/css/date.css">
            <link rel="stylesheet" href="../assets/css/profile.css">
        </head>

        <body>

            <!-- Preloader Start -->
            <div id="preloader-active">
                <div class="preloader d-flex align-items-center justify-content-center">
                    <div class="preloader-inner position-relative">
                        <div class="preloader-circle"></div>
                        <div class="preloader-img pere-text">
                        </div>
                    </div>
                </div>
            </div>
            <header>
                <!-- Header Start -->
                <div class="header-area">
                    <div class="main-header ">
                        <div class="header-top black-bg d-none d-md-block">
                            <div class="container">
                                <div class="col-xl-12">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="header-info-left">
                                        </div>
                                        <div class="header-info-right">
                                            <ul class="header-social">
                                                <li><a href="https://x.com/YuuZephyrine?t=gOtJCzcx59YrPk8ObaNybQ&s=09"><img src="../assets/img/logo/x.jpg" width="20" height="20" alt=""></a></li>
                                                <li><a href="https://instagram.com/hi.rya?igshid=OTVrdmVhZXdsNHZ5"><img src="../assets/img/logo/insta.jpg" width="20" height="20" alt=""></a></li>
                                                <li><a href="https://discord.com/users/700892098785837119"><img src="../assets/img/logo/discord.jpg" width="25" height="20" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-mid d-none d-md-block">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                        <div class="header-bottom header-sticky">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-lg-9 col-md-9 header-flex">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-md-block">
                                            <nav>
                                                <ul id="navigation">
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="categori.php">Category</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="../payment.php">Premium</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2">
                                        <div class="header-right-btn f-right d-none d-lg-block">
                                            <i class="fas fa-search special-tag"></i>
                                            <div class="search-box">
                                                <form action="#">
                                                    <input type="text" placeholder="Search">

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="drop-button col-xl-1 col-lg-1 col-md-1">
                                        <img src="../assets/img/profile/user.jpg" height="30" width="30" class="profile">
                                        <div class="drop-menu">
                                            <a href="../logout.php">Logout</a>
                                        </div>
                                    </div>
                                    <!-- Mobile Menu -->
                                    <div class="col-12">
                                        <div class="mobile_menu d-block d-md-none"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header End -->
            </header>

            <main>
                <!-- Trending Area Start -->
                <div class="trending-area fix">
                    <div class="container">
                        <div class="trending-main">
                            <!-- Trending Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="trending-tittle">
                                        <strong>Trending now</strong>
                                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                        <div class="trending-animated">
                                            <ul id="js-news" class="js-hidden">
                                                <li class="news-item">Sekitar 71% permukaan Bumi tertutup oleh air, menjadikannya planet biru.</li>
                                                <li class="news-item">Cahaya merambat pada kecepatan sekitar 299.792 kilometer per detik (186.282 mil per detik).</li>
                                                <li class="news-item">Ada lebih dari 7.000 bahasa yang aktif digunakan di seluruh dunia.</li>
                                                <li class="news-item">Keong laut Cepaea nemoralis dapat bergerak dengan kecepatan maksimum sekitar 1.3 cm per detik.</li>
                                                <li class="news-item">Dalam permainan kartu standar, ada lebih dari 2,5 juta cara untuk menyusun setumpuk kartu.</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- Trending Top -->
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img">
                                            <img src="../assets/img/news/perjuangan-pebalap-f1.jpg" alt="">
                                            <div class="trend-top-cap">
                                                <span>Sports</span>
                                                <h2><a href="details.php?id_berita=5">Perjuangan Pembalap F1 menjaga berat badan demi melesat di lantasan</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Trending Bottom -->
                                    <div class="trending-bottom">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">
                                                        <img src="../assets/img/news/mau-beli-fortuner-lawas-segini-estimasi-biaya-perbaikan-kaki-kakinya.jpg" alt="">
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span class="color1">Automotive</span>
                                                        <h4><a href="details.php?id_berita=19">Mau Beli Fortuner Lawas? Segini Estimasi Biaya Perbaikan Kaki-Kakinya</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">
                                                        <img src="../assets/img/news/menjajal-samsung-galaxy-tab-a9-plus-5g-tablet-11-inci-rp-4-jutaan.jpg" alt="">
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span class="color2">Technology</span>
                                                        <h4>
                                                            <h4><a href="details.php?id_berita=31">Mencoba Samsung Galaxy Tab a9 Plus 5g Tablet 11 inch berkisar 4 jutaan</a></h4>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">
                                                        <img src="../assets/img/news/itinerary-2-hari-1-malam-di-lamongan-jelajah-pantai-dan-goa-.jpg" alt="">
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span class="color3">Travels</span>
                                                        <h4><a href="details.php?id_berita=15">Itinerary 2 hari 1 malam di Lamongan, jelajah pantai dan goa</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Riht content -->
                                <div class="col-lg-4">
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="../assets/img/news/minum-jus-tidak-sesehat-makan-buah-langsung.jpg" width="130px" alt="">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span class="color1">Lifestyle</span>
                                            <h4><a href="details.php?id_berita=8">Minum Jus Tidak Sesehat Makan Buah Langsung, Benarkah?</a></h4>
                                        </div>
                                    </div>
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="../assets/img/news/jembatan-kaca-telan-korban-jiwa-sejumlah-wisata-lain-di-banyumas.jpg" width="130px" alt="">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span class="color3">Travel</span>
                                            <h4><a href="details.php?id_berita=9">Jembatan kaca telan korban jiwa</a></h4>
                                        </div>
                                    </div>
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="../assets/img/news/modifikasi-honda-civic.jpg" width="130px" alt="">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span class="color2">Automotive</span>
                                            <h4><a href="details.php?id_berita=20">Modifikasi Honda Civic jadi mirip lamborghini Huracan</a></h4>
                                        </div>
                                    </div>
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="../assets/img/news/tanda-penurunan-daya-ingat.jpg" width="130px" alt="">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span class="color4">Lifestyle</span>
                                            <h4><a href="details.php?id_berita=6">Tanda-tanda penurunan daya ingat</a></h4>
                                        </div>
                                    </div>
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="../assets/img/news/luca-marini-akui-tolak-tawaran-honda.jpg" width="130px" alt="">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span class="color1">Sports</span>
                                            <h4><a href="details.php?id_berita=38">Luca Marini akui tolak tawaran Honda</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Trending Area End -->
                <!-- Whats New Start -->
                <section class="whats-news-area pt-30 pb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="section-tittle mb-30">
                                            <h3>Whats News</h3>
                                        </div>
                                    </div>
                                    <?php
                                    $sql = "SELECT berita.id_berita, berita.gambar, berita.judul, kategori.nama_kategori FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori ORDER BY berita.id_berita DESC LIMIT 1"; // Ambil satu berita terbaru

                                    $result = $db->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Loop untuk menampilkan berita
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<div class="col-lg-6 col-md-6">';
                                            echo '<div class="single-what-news mb-100">';
                                            echo '<div class="what-img">';
                                            echo '<img widht="500px" height="500px" src="../assets/img/news/' . $row["gambar"] . '" alt="">';
                                            echo '</div>';
                                            echo '<div class="what-cap">';
                                            echo '<span class="color1">' . $row["nama_kategori"] . '</span>';
                                            echo '<h4><a href="#">' . $row["judul"] . '</a></h4>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                    } else {
                                        echo "Tidak ada berita.";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Whats New End -->
            </main>

            <footer>
                <!-- Footer Start-->
                <div class="footer-area pt-4 fix">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                                <div class="single-footer-caption">
                                    <div class="single-footer-caption">
                                        <!-- logo -->
                                        <div class="footer-logo">
                                            <a href="dashboard.php"> <img width="100%" src="../assets/img/logo/logo2_footer.jpg" style="position: relative; top: 20px; left: -110px;" alt=""></a>
                                        </div>
                                        <div class="footer-tittle"></div>
                                        <div class="footer-pera">
                                            <p>Beritaku adalah web sistem informasi dengan berbagai macam berita yang tersedia, mulai dari berita yang lagi Trending, Terbaru, dan berita lama</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        </div>
                    </div>
                </div>
                </div>
                <!-- footer-bottom aera -->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="footer-border">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-lg-6">
                                    <div class="footer-copy-right">
                                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;<script>
                                                document.write(new Date().getFullYear());
                                            </script> All rights reserved | all news is obtained from the website <a href="https://www.kompas.com/">Kompas.com</a>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->
            </footer>

            <!-- JS here -->

            <!-- All JS Custom Plugins Link Here here -->
            <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="../assets/js/popper.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
            <!-- Jquery Mobile Menu -->
            <script src="../assets/js/jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="../assets/js/owl.carousel.min.js"></script>
            <script src="../assets/js/slick.min.js"></script>
            <!-- Date Picker -->
            <script src="../assets/js/gijgo.min.js"></script>
            <!-- One Page, Animated-HeadLin -->
            <script src="../assets/js/wow.min.js"></script>
            <script src="../assets/js/animated.headline.js"></script>
            <script src="../assets/js/jquery.magnific-popup.js"></script>

            <!-- Breaking New Pluging -->
            <script src="../assets/js/jquery.ticker.js"></script>
            <script src="../assets/js/site.js"></script>

            <!-- Scrollup, nice-select, sticky -->
            <script src="../assets/js/jquery.scrollUp.min.js"></script>
            <script src="../assets/js/jquery.nice-select.min.js"></script>
            <script src="assets/js/jquery.sticky.js"></script>

            <!-- contact js -->
            <script src="../assets/js/contact.js"></script>
            <script src="../assets/js/jquery.form.js"></script>
            <script src="../assets/js/jquery.validate.min.js"></script>
            <script src="../assets/js/mail-script.js"></script>
            <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

            <!-- Jquery Plugins, main Jquery -->
            <script src="../assets/js/plugins.js"></script>
            <script src="../assets/js/main.js"></script>

            <!-- Alert -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        </body>

        </html>
<?php

    } else {
        header("location: /Project/premium/dashboard.php");
    }
} else {
    echo "anda belum login";
}
?>