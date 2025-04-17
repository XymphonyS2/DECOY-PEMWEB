<?php
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMA MUHAMMADIYAH 2 BANDAR LAMPUNG</title>

    <!--<link href="assets/aset/img/icon.png" rel="icon">-->
    <!--<link href="assets/aset/img/apple-touch-icon.png" rel="apple-touch-icon">-->
    <link rel="shorcut icon" href="theme/images/icons.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="theme/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="theme/css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="theme/css/simple-line-icons.css">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="theme/css/slick.css">
    <link rel="stylesheet" href="theme/css/slick-theme.css">
    <link rel="stylesheet" href="theme/css/owl.carousel.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/aset/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="assets/aset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/aset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/aset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/aset/css/style.css" rel="stylesheet">
    <!-- Main CSS -->

    <!-- Bootstrap 4 cdn  -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
</head>

<style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    /*.cta {*/
    /*  background: linear-gradient(rgba(66, 84, 81, 0.5), rgba(43, 56, 54, 0.5)), url("theme/images/bg.png"") fixed center center;*/
    /*  background-size: cover;*/
    /*  padding: 60px 0;*/
    /*}*/
</style>

<body>
    <header id="header" class="d-flex align-items-center">
        <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 70px;">
        <a href="muridbaru.php" style="display: block; text-align: center; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
        <img class="img img-responsive" width="200px;" src="theme/images/MUHA-2.png" alt="SMA S MUHAMMADIYAH 2 BANDAR LAMPUNG">
        </a>
    </header>

    <div id="herotoptop"></div>

    <main id="main">
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Penerimaan Murid Baru</h2>
                    <p>Untuk mendaftar ke SMA Muhammadiyah 2 Bandar Lampung, Anda harus menyiapkan:</p>
                    <br>
                    <form method="post" action="siswa.php">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Lengkap Anda">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ijazah / SKL</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kartu Keluarga</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pas Foto 3x4</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <input name="hafizh" type="submit" class="btn btn-success" value="Daftar Sekarang!">
                        <!-- <input name="hafizh" type="submit" class="btn btn-success" placeholder="Daftar Sekarang!"> -->
                    </form>
                </div>
            </div>
        </section>

    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <script src="assets/aset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/aset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/aset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/aset/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/aset/vendor/php-email-form/validate.js"></script>


    <script src="assets/aset/js/main.js"></script>

</body>

</html><!-- ======= Footer ======= -->
