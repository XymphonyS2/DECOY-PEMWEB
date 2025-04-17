<?php
require "koneksi.php";

if (isset($_POST['hafizh'])) {
    $nama = $_POST['nama'];

    $query_post = query("INSERT INTO muriddaftar SET nama='$nama'");
    if ($query_post !== false) {
        echo "<script>alert('Murid Berhasil Terdaftar!');</script>";
    }
}
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
        <div>
            <a href="#herotoptop" class="navbar-brand nav-brand2 ml-5"><img class="img img-responsive" width="200px;" src="theme/images/MUHA-2.png"></a>
        </div>

        <div class="container d-flex align-items-center justify-content-start">

            <nav id="navbar" class="navbar mr-5 ml-auto">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="artikel.php">Artikel</a></li>
                    <li><a class="nav-link scrollto" href="galeri.php">Galeri</a></li>
                    <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="prestasi.php">Prestasi</a></li>
                            <li><a href="guru.php">Guru</a></li>
                            <li><a href="#herotoptop">Siswa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#sejarah.php">Sejarah</a></li>
                            <li><a href="visimisi.php">Visi dan Misi</a></li>
                            <li><a href="tujuan.php">Tujuan</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <div id="herotoptop"></div>

    <main id="main">
        <section id="about" class="about section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Siswa</h2>
                    <!-- Secondary News Row -->
                    <div class="counts container">

                    <div class="row no-gutters">

                        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <span class="counter">234</span>
                                <p><strong>Siswa</strong></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
    <div class="count-box">
        <i class="bi bi-people"></i>
        <div class="chart-text">
            <?php
            $query = query("SELECT * FROM muriddaftar");
            $data = mysqli_num_rows($query); // Menggunakan mysqli_num_rows untuk mendapatkan jumlah baris
            // atau alternatif jika Anda menggunakan function wrapper khusus:
            // $data = count(rows($query)); // Jika rows() mengembalikan array hasil
            ?>
            <span class="counter"><?= $data ?></span>
            <p><strong>Siswa Yang Mendaftar</strong></p>
        </div>
    </div>
</div>

                        <!-- <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <div class="chart-text">
                                    <?html
                                    $query = query("SELECT * FROM muriddaftar");
                                    $data = rows($query);
                                    ?>
                                    <span class="counter"><?= $data ?></span>
                                    <p><strong>Siswa Yang Mendaftar</strong></p>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <span class="counter">1024</span>
                                <p><strong>Alumni</strong></p>
                            </div>
                        </div>

                    </div>

                </div>
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
    <script src="assets/aset/vendor/html-email-form/validate.js"></script>


    <script src="assets/aset/js/main.js"></script>

</body>

</html><!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>SMA S MUHAMMADIYAH 2</h3>
                    <p>
                        Bandar Lampung, 35144<br>
                        Lampung, Indonesia<br><br>
                        <strong>Phone:</strong> 0721 781578<br>
                        <strong>Email:</strong> smamuha2bdl@gmail.com<br>
                    </p>
                    <div class="social-links mt-3">
                        <a target="blank"
                            href="https://www.facebook.com/p/SMA-Muhammadiyah-2-Bandar-Lampung-100044363867463/?locale=id_ID"
                            class="facebook"><i class="bi bi-facebook"></i></a>
                        <a target="blank" href="https://www.instagram.com/smamdabalam/" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a target="blank" href="https://www.youtube.com/channel/UC3ieSrJMvjzla5ExkgtJYxw"
                            class="youtube"><i class="bxi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Menu Utama</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#heroCarousel">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="artikel.php">Artikel</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="galeri.php">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Akademik</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="prestasi.php">Prestasi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="guru">Guru</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="agenda">Siswa</a></li>
                    </ul>
                    </li>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Tentang</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="sejarah">Sejarah</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="visi_misi">Visi dan Misi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="struktur">Tujuan</a></li>
                    </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
</footer>