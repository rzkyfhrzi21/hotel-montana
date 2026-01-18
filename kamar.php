<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Hebat - Tempat Menginap Terbaik di Lampung</title>
    <meta name="description" content="Temukan kamar terbaik di Hotel Hebat dengan pemandangan indah, fasilitas lengkap, dan kenyamanan maksimal. Pesan sekarang dan nikmati liburan Anda di Lampung.">
    <meta name="keywords" content="Hotel Hebat, kamar hotel Lampung, penginapan Lampung, kamar terbaik, hotel dengan fasilitas lengkap, liburan nyaman">
    <meta name="author" content="Hotel Hebat">
    <meta property="og:title" content="Kamar Terbaik di Hotel Hebat - Tempat Menginap Terbaik di Lampung">
    <meta property="og:description" content="Pilih kamar terbaik di Hotel Hebat dengan pemandangan yang memukau dan fasilitas lengkap untuk kenyamanan Anda.">
    <meta property="og:image" content="img/preview.jpg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.hotelhebat.com/kamar.php">
    <?php include 'functions/css.php'; ?>
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
                                        <li><a class="active" href="kamar.php">kamar</a></li>
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

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3>Hotel Hebat</h3>
        <h3>Kamar</h3>
    </div>
    <!-- bradcam_area_end -->

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
            $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");
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

    <!-- footer start -->
    <?php include 'functions/footer.php'; ?>
    <!-- footer start -->

    <?php include 'functions/js.php'; ?>
</body>

</html>