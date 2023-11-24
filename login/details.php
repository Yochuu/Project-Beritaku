<?php
if (isset($_GET['id_berita'])) {
    $id_berita    = $_GET['id_berita'];
} else {
    die("Error. No ID Selected!");
}
include '../koneksi.php';
function select($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
$berita = select("SELECT * FROM berita where id_berita='$id_berita'");
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
                                        <li><a href="dashboard.php">Home</a></li>
                                        <li><a href="categori.php">Category</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">

                                    </form>
                                </div>
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
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <!-- Hot Aimated News Tittle-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Fun Fact</strong>
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
                    <div>
                        <?php foreach ($berita as $news) : ?>
                            <h1><?= $news['judul'] ?></h1>
                            <img src="../assets/img/news/<?= $news['gambar'] ?>" width="1200px" height="700px" alt class="" /><br>
                            <p><?= $news['deskripsi'] ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
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
    <script src="../assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>