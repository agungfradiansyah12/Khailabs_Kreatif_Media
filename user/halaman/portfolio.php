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
  <header id="header" class="fixed-top d-flex align-items-center ">
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


  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Portfolio</h2>
          <ol>
            <li><a href=".?halaman=beranda">Home</a></li>
            <li>Our Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">GAME KHAILABS</li>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <?php
                $sql = "SELECT * FROM tb_portfolio order by id_portfolio ";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
            <div class="col-lg-3 col-md-6 portfolio-wrap filter-app">
              <div class="portfolio-item">
                <img src="../img/portfolio/<?=$r['gambar_portfolio']?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h3><?=$r['judul_portfolio']?></h3>
                  <div>
                    <a href="../img/portfolio/<?=$r['gambar_portfolio']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$r['judul_portfolio']?>"><i class="bx bx-plus"></i></a>
                    <a href=".?halaman=portfoliodetail&id_portfolio=<?= $r["id_portfolio"]?>" title="Baca Selengkapnya..."><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  <?php } ?>

  
  
          </div>
  
        </div>
      </section> 
    <!-- End Portfolio Section -->

  </main><!-- End #main -->

<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>