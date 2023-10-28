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

      <!-- ======= About Us Section ======= -->
      <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profile</h2>
          <ol>
            <li><a href=".?halaman=beranda">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->
<!-- 
    <section class="tentang">
<div class="container" data-aos="fade-up" date-aos-delay="200">

</div>
</section> -->

<!-- ======= Why Us Section ======= -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">
    <div class="tentang">
    <img src="./assets/img/logo/k1.png" class="tengah" alt="" width="150" height="160">

 <p class="mt-5">KhaiLabs adalah pengembang game dari Probolinggo, Indonesia. Kami didirikan pada tahun 2016. 
  Kami telah membuat 10 game seluler. Fokus kami adalah pada game hypercasual dan midcore. Kami ingin memberikan pengalaman yang unik dan menyenangkan melalui permainan kami.
  </p>
      </div>
      <section class="features">
      <div class="container">
      <?php
                $sql = "SELECT * FROM tb_biodata";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
        <div class="section-title">
          <h2>VISI MISI</h2>
           </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>VISI</h3>
            <ul>
              <li><?=$r['visi']?></li>
            </ul>
            <h3>MISI</h3>
            <ul>
              <li><?=$r['misi']?></li>
            </ul>
          </div>
        </div>
        <?php } ?>
   
        </div>
        </section>

        <!-- 
        <h4 class="text-center">
          Visi
            </h4>
            <p class="description">
            <?=$r['visi']?>
            <h4 class="text-center">
          Misi
            </h4> 
            <p class="description">
            <?=$r['misi']?>
            </p>
 -->
    </div>
  </section>
<!-- End Why Us Section -->

  </main>