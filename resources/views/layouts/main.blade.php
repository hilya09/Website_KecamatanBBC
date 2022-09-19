<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kecamatan Babakancikao | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/logo-pwk.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.0.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/assets/img/logo-pwk.png" alt="">
        <h1 class="d-flex align-items-center">KECAMATAN BABAKANCIKAO</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}">Beranda</a></li>
          <li><a href="/wisata" class="nav-link {{ ($title === "Wisata") ? 'active' : '' }}">Wisata</a></li>
          <li><a href="/berita" class="nav-link {{ ($title === "Berita") ? 'active' : '' }}">Berita</a></li>
          <li><a href="/desa" class="nav-link {{ ($title === "Desa") ? 'active' : '' }}">Desa</a></li>
          <li><a href="https://ppid.purwakartakab.go.id/">PPID</a></li>
          <li><a href="http://laporanwarga.oganlopian.purwakartakab.go.id/">Pengaduan</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <main id="main" class="main">
        @yield('main')
    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  
  <div class="footer-content">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Kecamatan Babakancikao</span>
          </a>
          <p>Babakancikao adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan Kabupaten Karawang, kecamatan Jatiluhur di barat, kecamatan Bungursari di timur, dan kecamatan Purwakarta di selatan.</p>
          <div class="social-links d-flex  mt-3">
            <a href="https://www.facebook.com/babakancikao.someah" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/kec_bbc/" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
        
        </div>

        <div class="col-lg-2 col-6 footer-links">
          
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Kontak Kami</h4>
        <p>
          FCMC+73C, Unnamed Road, Kadumekar<br>
          Kec. Babakancikao, Kabupaten Purwakarta,<br>
          Jawa Barat 41151 <br><br>
          <strong>Telepon:</strong> 0812 5589 5548<br>
          <strong>Email:</strong> kec.bbc@gmail.com<br>
        </p>

      </div>

      </div>
    </div>
  </div>

  <div class="footer-legal">
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2022. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <br> Hilya Anbiyani Fitri Muhyidin <br>
        and <br>
        Sifa Kiamul Lailia
      </div>
    </div>
  </div>
</footer><!-- End Footer -->
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>