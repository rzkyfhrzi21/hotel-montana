<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Hebat - Tempat Menginap Terbaik di Lampung</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="template1/css/bootstrap.min.css">
    <link rel="stylesheet" href="template1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template1/css/magnific-popup.css">
    <link rel="stylesheet" href="template1/css/font-awesome.min.css">
    <link rel="stylesheet" href="template1/css/themify-icons.css">
    <link rel="stylesheet" href="template1/css/nice-select.css">
    <link rel="stylesheet" href="template1/css/flaticon.css">
    <link rel="stylesheet" href="template1/css/gijgo.css">
    <link rel="stylesheet" href="template1/css/animate.css">
    <link rel="stylesheet" href="template1/css/slicknav.css">
    <link rel="stylesheet" href="template1/css/style.css">
    <link rel="stylesheet" href="template1/css/responsive.css">
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="kamar.php">kamar</a></li>
                                        <li><a class="active" href="fasilitas.php">fasilitas</a></li>
                                        <li><a href="tentang.php">tentang</a></li>
                                        <li><a href="login.php">login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="bahan/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="login.php">Masuk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <h3>Hotel Hebat</h3>
        <h3>Fasilitas</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <?php

            include 'functions/koneksi.php';

            $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas");

            while ($fasilitas = mysqli_fetch_array($sql_fasilitas)) :

            ?>
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <span>Fasilitas</span>
                                <h3><?= $fasilitas['nama_fasilitas']; ?></h3>
                            </div>
                            <p><?= $fasilitas['ket_fasilitas']; ?></p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="about_thumb d-flex">
                            <div class="img">
                                <img src="img/fasilitas/<?= $fasilitas['gambar_fasilitas']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- footer start -->
    <?php include 'functions/footer.php'; ?>
    <!-- footer start -->

    <?php include 'functions/js.php'; ?>

</body>

</html>