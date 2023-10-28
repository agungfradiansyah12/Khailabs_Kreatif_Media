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
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href=".?halaman=beranda">Home</a></li>
            <li><a href=".?halaman=portfolio">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>
      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
        <?php
                $id = $_GET["id_portfolio"];
                $sql = "SELECT * FROM tb_portfolio where id_portfolio = '$id' order by id_portfolio desc limit 1 ";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../img/portfolio/<?=$r['gambar_portfolio']?>" alt="">
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-6">
          <div class="portfolio-info">
              <h3>Tentang Game</h3>
              <ul>
                <li><strong>Pembuat</strong>: KhaiLabs</li>
                <li><strong>Tanggal Rilis</strong>: <?=$r['tanggal_rilis']?></li>
                <li><strong>Download</strong>: <a href="<?=$r['download']?>" target="_blank"><?=$r['judul_portfolio']?></a></li>
              </ul>
              <h2><?=$r['judul_portfolio']?></h2>
              <p><?=$r['konten_portfolio']?></p>
            </div>
          </div>
   <?php }?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


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