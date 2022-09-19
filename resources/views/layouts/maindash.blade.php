<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kecamatan Babakancikao | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/logo-pwk.png"rel="icon">
  <link href="/assetsadmin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assetsadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assetsadmin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assetsadmin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assetsadmin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assetsadmin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assetsadmin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assetsadmin/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/assetsadmin/css/trix.css">
  <script type="text/javascript" src="/assetsadmin/js/trix.js"></script>
  <style>
    trix-toolbar [data-trix-button-group = "file-tools"]{
        display:none;
    }
  </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
            <img src="/assets/img/logo-pwk.png" alt="">
            <span class="d-none d-lg-block">KEC.BBC</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <!-- <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form> -->
        <!-- </div>End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="/profil" data-bs-toggle="dropdown">
                        <img src="/assetsadmin/img/user.jpg"  alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->name }}</h6>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/profil">
                                <i class="bi bi-person"></i>
                                <span>Profil Saya</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/editprofil">
                                <i class="bi bi-gear"></i>
                                <span>Edit Profil</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/editpass">
                                <i class="bi bi-key"></i>
                                <span>Ganti Kata Sandi</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/login">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

      <!-- @if(session() -> has ('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"
          aria-label="Close"></button>
        </div>
      @endif -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Dashboard") ? '' : 'collapsed' }}" href="/dashboard">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Berita") ? '' : 'collapsed' }}" href="/post">
            <i class="bi bi-globe2"></i>
            <span>Berita</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Desa") ? '' : 'collapsed' }}" href="/adddesa">
            <i class="bi bi-bank"></i>
            <span>Desa</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Wisata") ? '' : 'collapsed' }}" href="/addwisata">
            <i class="bi bi-tree"></i>
            <span>Wisata</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Register") ? '' : 'collapsed' }}" href="/dashboard/registers">
            <i class="bi bi-person-lines-fill"></i>
            <span>Register</span>
            </a>
        </li>

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        @yield('maindash')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright 2022. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <br> Hilya Anbiyani Fitri Muhyidin <br>
            and <br>
            Sifa Kiamul Lailia
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetsadmin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsadmin/vendor/chart.js/chart.min.js"></script>
    <script src="assetsadmin/vendor/echarts/echarts.min.js"></script>
    <script src="assetsadmin/vendor/quill/quill.min.js"></script>
    <script src="assetsadmin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assetsadmin/vendor/tinymce/tinymce.min.js"></script>
    <script src="assetsadmin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetsadmin/js/main.js"></script>

</body>

</html>