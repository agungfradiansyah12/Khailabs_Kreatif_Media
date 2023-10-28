<?php 
    include "../admin/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KHAILABS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">

</head>

<body>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <h1 class="text-light"><a href=".?halaman=beranda"><span>KHAILABS</span></a></h1>
        </div>

        <!-- navbar -->
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href=".">Home</a></li>
            <li><a href=".?halaman=profil">Profile</a></li>
            <li><a href=".?halaman=portfolio">Portfolio</a></li>
            <li><a href=".?halaman=team">Team</a></li>
            <li class="dropdown"><a href="#"><span></span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href=".?halaman=agenda">Agenda</a></li>
                <li><a href=".?halaman=galeri">Galeri</a></li>
              </ul>
            </li>
            <li><a href=".?halaman=contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- End navbar -->

      </div>
  </header>
<!-- End Header -->

        <?php
            $halaman = @$_GET['halaman'];
            $beranda = "halaman/beranda.php";
            $p = "halaman/$halaman.php";
            if(!empty($halaman) && file_exists($p))
            {
                include "$p";
            }
            else{
                include "$beranda";
            }
        ?>

<!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href=".?halaman=beranda">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href=".?halaman=profil">Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href=".?halaman=portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href=".?halaman=team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href=".?halaman=berita">Blog</a></li>
            </ul>
          </div>
          
          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Khailabs<br>
              Paiton, Probolinggo<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 812 55 2000 40<br>
              <strong>Email:</strong> dev@Khailabs.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>About Khailabs</h3>
            <p>KhaiLabs is a game developer from Probolinggo, Indonesia. We were founded in 2016. We have made 10 mobile games. 
              Our focus is on hypercasual and midcore games. We want to provide a unique and fun experience through our games. .</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-whatsapp"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="twitter"><i class="bi bi-envelope"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-google-play"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="copyright">
      <strong><span>PT KHAILABS KREATIF MEDIA 2019-2022 </span></strong>  &copy; 
      </div>
    </div>
  </footer>
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>