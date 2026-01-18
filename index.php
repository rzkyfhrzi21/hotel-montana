<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Hebat - Tempat Menginap Terbaik di Lampung</title>

    <meta name="description" content="Hotel Hebat menawarkan pengalaman menginap dengan pemandangan pegunungan dan pantai yang indah, kolam renang dengan pemandangan matahari terbenam, serta fasilitas lengkap untuk keluarga dan acara konvensi di Lampung.">
    <meta name="keywords" content="Hotel Hebat, hotel terbaik di Lampung, hotel dengan pemandangan indah, kolam renang dengan sunset, kids club Lampung, convention center terbesar Lampung, penginapan mewah, hotel untuk acara pernikahan, MICE Lampung">
    <meta name="author" content="Hotel Hebat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Hotel Hebat - Penginapan Sempurna di Lampung">
    <meta property="og:description" content="Hotel Hebat menawarkan pengalaman menginap dengan pemandangan pegunungan dan pantai yang indah, kolam renang dengan pemandangan matahari terbenam, serta fasilitas lengkap untuk keluarga dan acara konvensi di Lampung.">
    <meta property="og:type" content="website">
    <?php include 'functions/css.php'; ?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a href="kamar.php">kamar</a></li>
                                        <li><a href="fasilitas.php">fasilitas</a></li>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Hotel Hebat</h3>
                                <p>Pemrograman Lanjut 5TI2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>I Made Aditya Hadinata</h3>
                                <p>2311010029</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Home</span>
                            <h3>Hotel Hebat</h3>
                        </div>
                        <p>Lepaskan diri anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah dan pantai yang cantik. Nikmati sore yang hangat dan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau.
                            Kids Club yang luas menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengkapi pelayanan lengkap dan ruang konvensi terbesar di Lampung, mampu mengakomodasi hingga 3.000 delegasi.
                            Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun wujudkan acara pernikahan adat yang mewah.</p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="bahan/dashboard1.jpg" alt="">
                        </div>
                        <div class="img_2">
                            <img src="bahan/dashboard2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <?php

            include 'functions/koneksi.php';

            $sql_fasilitas = mysqli_query($koneksi, "SELECT * from fasilitas limit 3");

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

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Kamar yang Tersedia</span>
                        <h3>Pilih Kamar yang Terbaik</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <?php
            include 'functions/koneksi.php';
            $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar limit 4");
            while ($kamar = mysqli_fetch_array($sql_kamar)) :
            ?>
                <div class="single_rooms">
                    <div class="room_thumb">
                        <img src="img/kamar/<?= $kamar['gambar_kamar']; ?>" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span><?= $kamar['ket_kamar']; ?></span>
                                <h3><?= $kamar['nama_kamar']; ?></h3>
                                <span>Dengan <?= $kamar['jumlah_kasur']; ?> Kasur</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    <!-- features_room_end -->

    <!-- Location Section Start -->
    <div class="features_room">
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <span>Tentang</span>
                            <h3>Lokasi</h3>
                        </div>
                    </div>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5612.774364900812!2d105.24679936860888!3d-5.377325695896865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dac5f1bf788b%3A0x2458668e7c62825f!2sInstitut%20Informatika%20dan%20Bisnis%20Darmajaya!5e0!3m2!1sid!2sid!4v1736927739141!5m2!1sid!2sid" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </div>
    <!-- Location Section End -->

    <!-- footer start -->
    <?php include 'functions/footer.php'; ?>
    <!-- footer start -->

    <?php include 'functions/js.php'; ?>

</body>

</html>