<?php
include("../koneksi.php")
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
                                            <li><a href="dashboard.php">Home</a></li>
                                            <li><a href="categori.php">Category</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="blog.php">Blog</a></li>
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
                                    <a href="logout.php">Logout</a>
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
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Category</h3>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lifestyle</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-travel" role="tab" aria-controls="nav-contact" aria-selected="false">Travel</a>
                                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-automative" role="tab" aria-controls="nav-contact" aria-selected="false">Automotive</a>
                                            <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                                            <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- Card two -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php
                                                $query_lifestyle = mysqli_query($db, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.id_kategori = 1 ORDER BY RAND()") or die(mysqli_error($db));
                                                while ($row = mysqli_fetch_array($query_lifestyle)) :
                                                ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="../assets/img/news/<?= $row['gambar'] ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $row['nama_kategori'] ?></span>
                                                                <h4><a href="details.php?id_berita=<?= $row['id_berita'] ?>"><?= $row['judul'] ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endwhile;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-travel" role="tabpanel" aria-labelledby="nav-travel-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php
                                                $query_travel = mysqli_query($db, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.id_kategori = 2 ORDER BY RAND()") or die(mysqli_error($db));
                                                while ($row = mysqli_fetch_array($query_travel)) :
                                                ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="../assets/img/news/<?= $row['gambar'] ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $row['nama_kategori'] ?></span>
                                                                <h4><a href="details.php?id_berita=<?= $row['id_berita'] ?>"><?= $row['judul'] ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endwhile;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-automative" role="tabpanel" aria-labelledby="nav-last-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php
                                                $query_auto = mysqli_query($db, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.id_kategori = 3 ORDER BY RAND()") or die(mysqli_error($db));
                                                while ($row = mysqli_fetch_array($query_auto)) :
                                                ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="../assets/img/news/<?= $row['gambar'] ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $row['nama_kategori'] ?></span>
                                                                <h4><a href="details.php?id_berita=<?= $row['id_berita'] ?>"><?= $row['judul'] ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endwhile;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php
                                                $query_sports = mysqli_query($db, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.id_kategori = 4 ORDER BY RAND()") or die(mysqli_error($db));
                                                while ($row = mysqli_fetch_array($query_sports)) :
                                                ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="../assets/img/news/<?= $row['gambar'] ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $row['nama_kategori'] ?></span>
                                                                <h4><a href="details.php?id_berita=<?= $row['id_berita'] ?>"><?= $row['judul'] ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endwhile;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Six -->
                                    <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php
                                                $query_tech = mysqli_query($db, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.id_kategori = 5 ORDER BY RAND()") or die(mysqli_error($db));
                                                while ($row = mysqli_fetch_array($query_tech)) :
                                                ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="../assets/img/news/<?= $row['gambar'] ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $row['nama_kategori'] ?></span>
                                                                <h4><a href="details.php?id_berita=<?= $row['id_berita'] ?>"><?= $row['judul'] ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endwhile;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="../assets/img/news/news_card.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Whats New End -->


        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
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