<?php
require 'koneksi.php';
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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(theme/images/FOTO-SEKOLAH.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Pendidikan Berkualitas, Akhlak Mulia
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Komitmen memberikan pendidikan terbaik
                                    yang mengintegrasikan ilmu pengetahuan dan nilai-nilai Islam.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(theme/images/HORAS.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Mencerdaskan Generasi, Menguatkan Iman
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Didedikasikan oleh tenaga pendidik yang
                                    kompeten, kami membimbing siswa untuk meraih prestasi dunia dan akhirat</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(theme/images/17.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Inspirasi Belajar, Teladan Akhlak</h2>
                                <p class="animate__animated animate__fadeInUp">Menjadi tempat tumbuhnya generasi unggul
                                    yang cerdas, kreatif, dan berlandaskan nilai-nilai Islam.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center">
        <div>
            <a href="#heroCarousel" class="navbar-brand nav-brand2 ml-5"><img class="img img-responsive" width="200px;"
                    src="theme/images/MUHA-2.png"></a>
        </div>

        <div class="container d-flex align-items-center justify-content-start">

            <nav id="navbar" class="navbar mr-5 ml-auto">
                <ul>
                    <li><a class="nav-link scrollto " href="#heroCarousel">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="artikel.php">Artikel</a></li>
                    <li><a class="nav-link scrollto" href="galeri.php">Galeri</a></li>
                    <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="prestasi.php">Prestasi</a></li>
                            <li><a href="guru.php">Guru</a></li>
                            <li><a href="siswa.php">Siswa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="sejarah.php">Sejarah</a></li>
                            <li><a href="visimisi.php">Visi dan Misi</a></li>
                            <li><a href="tujuan.php">Tujuan</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <main id="main">
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Selamat Datang</h2>
                    <p>SMAS MUHAMMADIYAH 2 didirikan pada 1977 sebagai bagian dari upaya Muhammadiyah dalam
                        mencerdaskan kehidupan bangsa dengan berlandaskan nilai-nilai Islam. Sejak awal, sekolah ini
                        berkomitmen untuk mencetak generasi Muslim yang berilmu, berakhlak mulia, dan berdaya saing
                        tinggi.</p> <br>
                    <p>Dengan kurikulum yang mengintegrasikan pendidikan umum dan pendidikan Islam, SMAS MUHAMMADIYAH 2
                        membekali siswa dengan ilmu pengetahuan serta nilai-nilai keislaman dalam kehidupan sehari-hari.
                        Didukung oleh tenaga pendidik yang profesional dan fasilitas yang terus berkembang, sekolah ini
                        terus berupaya menjadi lembaga pendidikan yang unggul dalam membangun karakter Islami dan
                        intelektualitas siswa.</p>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>Penerimaan Murid Baru</h3>
                    <p>SMA S Muhammadiyah 2 akan membuka pendaftaran penerimaan murid tahun ajaran 2025-2026 pada
                        Januari 2025.</p>
                    <a class="cta-btn" target="blank" href="daftar.php">Daftar Sekarang</a>
                </div>

            </div>
        </section>

        <section class="more-services section-bg" id="artikel">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>Artikel Terbaru</h2>
                    <p>Berita terkini tentang SMA S Muhammadiyah 2</p>
                </div>

                <div class="container mt-4">
                    <!-- Main News Row -->
                    <div class="row mb-4">
                        <!-- First main news item -->
                        <div class="col-md-4">
                            <div class="news-card">
                                <div class="image-container" style="height: 250px; overflow: hidden;">
                                    <img src="theme/images/BERITA1.jpeg" class="card-img-top" alt="Graduate news"
                                        style="width: 100%; max-height: 250px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h3 class="news-title">
                                        <a href="#">Siswa mendapatkan juara 3 Tingkat Nasional Karya Tulis Ilmiah</a>
                                    </h3>
                                    <p class="news-date">7 Maret 2025, 13:29</p>
                                </div>
                            </div>
                        </div>

                        <!-- Second main news item -->
                        <div class="col-md-4">
                            <div class="news-card">
                                <div class="image-container" style="height: 250px; overflow: hidden;">
                                    <img src="theme/images/BERITA2.jpeg" class="card-img-top" alt="Graduate news"
                                        style="width: 100%; max-height: 250px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h3 class="news-title">
                                        <a href="#">Kembali Meraih Juara Umum dalam kegiatan IPSI Lampung Open 2024
                                            tingkat Provinsi</a>
                                    </h3>
                                    <p class="news-date">7 Maret 2025, 13:29</p>
                                </div>
                            </div>
                        </div>

                        <!-- Third main news item -->
                        <div class="col-md-4">
                            <div class="news-card">
                                <div class="image-container" style="height: 250px; overflow: hidden;">
                                    <img src="theme/images/BERITA3.jpeg" class="card-img-top" alt="Graduate news"
                                        style="width: 100%; max-height: 250px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h3 class="news-title">
                                        <a href="#">Sekolah ini menjadi Tuan Rumah Event LKBB Gerap Irama Gerakan
                                            Paskibra (DIRGANPAKSA)</a>
                                    </h3>
                                    <p class="news-date">7 Maret 2025, 13:29</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary News Row -->
                    <div class="row">
                        <!-- Left column for secondary news -->
                        <div class="col-md-6">
                            <!-- First small news item -->
                            <div class="news-card">
                                <div class="small-news-item">
                                    <div class="small-image-container"
                                        style="min-width: 120px; height: 80px; overflow: hidden; margin-right: 10px;">
                                        <img src="theme/images/BERITA4.jpeg" alt="FTP UGM news"
                                            style="min-width: 120px; height: 80px; object-fit: cover;">
                                    </div>
                                    <div class="small-news-content">
                                        <h4 class="news-title mb-1">
                                            <a href="#">Bakti Sosisal IPM SMA Muhammadiyah 2 Bandarlampung Mempererat Silaturahmi dan Kepedulian Sosial</a>
                                        </h4>
                                        <p class="small-news-date mb-0">6 Maret 2025, 14:45</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Second small news item -->
                            <div class="news-card">
                                <div class="small-news-item">
                                    <div class="small-image-container"
                                        style="min-width: 120px; height: 80px; overflow: hidden; margin-right: 10px;">
                                        <img src="theme/images/BERITA5.jpg" alt="FTP UGM accreditation"
                                            style="width: 120px; height: 80px; object-fit: cover;">
                                    </div>
                                    <div class="small-news-content">
                                        <h4 class="news-title mb-1">
                                            <a href="#">Berbagi Takjil Mengisi Kekosongan Ramadhan??!</a>
                                        </h4>
                                        <p class="small-news-date mb-0">5 Maret 2025, 13:02</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right column for secondary news -->
                        <div class="col-md-6">
                            <!-- Third small news item -->
                            <div class="news-card">
                                <div class="small-news-item">
                                    <div class="small-image-container"
                                        style="min-width: 120px; height: 80px; overflow: hidden; margin-right: 10px;">
                                        <img src="theme/images/BERITA6.jpeg" alt="UGM Awards"
                                            style="width: 120px; height: 80px; object-fit: cover;">
                                    </div>
                                    <div class="small-news-content">
                                        <h4 class="news-title mb-1">
                                            <a href="#">Penggelaran Workshop Selama 3 Hari dengan Tema “Improving Teacher Comprehension Toward ‘Kurikulum Merdeka'”</a>
                                        </h4>
                                        <p class="small-news-date mb-0">27 Februari 2025, 13:08</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Fourth small news item -->
                            <div class="news-card">
                                <div class="small-news-item">
                                    <div class="small-image-container"
                                        style="min-width: 120px; height: 80px; overflow: hidden; margin-right: 10px;">
                                        <img src="theme/images/BERITA7.jpeg"
                                            alt="Tim Semar UGM" style="width: 120px; height: 80px; object-fit: cover;">
                                    </div>
                                    <div class="small-news-content">
                                        <h4 class="news-title mb-1">
                                            <a href="#">Kegiatan Pembukaan Masa Pengenalan Lingkungan Sekolah (MPLS) dan Forum Ta’aruf Siswa (Fortasi)l</a>
                                        </h4>
                                        <p class="small-news-date mb-0">20 Februari 2025, 16:30</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Secondary News Row -->
                        <div class="row">
                            <!-- Left column for secondary news -->
                            <div class="col-md-13">
                                <!-- First small news item -->
                                <div class="news-card">
                                    <a class="small-news-item" href="artikel.php"> 
                                        <div class="small-news-content">
                                            <h4 class="news-title mb-1">
                                                <span>Pelajari Lainnya...</span>
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap Bundle with Popper -->
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </section>


        <section id="portfolio" class="portfolio section-bg2">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri</h2>

                    <div class="row portfolio-container">

                        <div class="col-lg-4 col-md-4 portfolio-item filter-app">
                            <div class="portfolio-wrap" style="height: 250px; overflow: hidden;">
                                <img src="theme/images/FOTO-SEKOLAH.jpeg" value="4" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Gedung Sekolah</h4>
                                </div>
                                <div class="portfolio-links">
                                    <a href="assets/images/27c53d7b7aace7772f6e599127a68251.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="gedungsekolah"><i class="bx bx-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-4 col-md-4 portfolio-item filter-app">
                            <div class="portfolio-wrap" style="min-height: 250px; overflow: hidden;">
                                <img src="theme/images/MASJID.jpeg" value="4" class="img-fluid" alt="" style="width: 100%; height: auto; object-fit: cover;">
                                <div class="portfolio-info">
                                    <h4>Masjid</h4>
                                </div>
                                <div class="portfolio-links">
                                    <a href="assets/images/f9eacc7c524ffd45229ea089c335cbf7.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="masjid"><i class="bx bx-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-4 col-md-4 portfolio-item filter-app">
                            <div class="portfolio-wrap" style="height: 250px; overflow: hidden;">
                                <img src="theme/images/17.jpeg" value="4" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>17 Agustus</h4>
                                </div>
                                <div class="portfolio-links">
                                    <a href="assets/images/cdd7a73cc02f97bb655c46f363780af0.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="17 agustus"><i class="bx bx-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="counts container">

                    <div class="row no-gutters">

                        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-person"></i>
                                <span class="counter">66</span>
                                <p><strong>Guru</strong></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <div class="chart-text">
                                    <span class="counter">234</span>
                                    <p><strong>Siswa</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-bookmark"></i>
                                <span class="counter">6</span>
                                <p><strong>Ekstrakurikuler</strong></p>
                            </div>
                        </div>

                    </div>

                </div>
        </section>

        <section id="contact" class="contact section-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch infos">
                        <div class="row">
                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bi bi-map"></i>
                                <h4>Alamat</h4>
                                <p>Jl. ZA. Pagar Alam No.14<br>Labuhan Ratu <br>Bandar Lampung, 35144</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon</h4>
                                <p>0822-8159-5204</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bi bi-envelope"></i>
                                <h4>Email</h4>
                                <p>smamuha2bdl@gmail.com</p>
                            </div>
                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bi bi-clock"></i>
                                <h4>Jam Kerja</h4>
                                <p>Senin - Jumat: 07.00 - 16.00 WIB</p>
                            </div>

                        </div>

                    </div>


                    <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.25573193578!2d105.24790187034863!3d-5.37792534182902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dac56447c995%3A0xba1b81a606d2e179!2sSMA%20Muhammadiyah%202%20%7C%20Bandar%20Lampung!5e0!3m2!1sid!2sid!4v1744299028542!5m2!1sid!2sid"
                            width="1300" height="500" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
                        <li><i class="bi bi-chevron-right"></i> <a href="guru.php">Guru</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="siswa.php">Siswa</a></li>
                    </ul>
                    </li>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Tentang</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="sejarah.php">Sejarah</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="visimisi.php">Visi dan Misi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="tujuan.php">Tujuan</a></li>
                    </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
</footer>