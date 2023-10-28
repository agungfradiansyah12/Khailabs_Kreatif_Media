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

      <!-- ======= Our Team Section ======= -->
      <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Team</h2>
          <ol>
            <li><a href=".?halaman=beranda">Home</a></li>
            <li>Our Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->
    
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
  
          <div class="row">
  
          <?php
                    $sql = "SELECT * FROM tb_pegawai";
                    $q = mysqli_query($k,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <div class="member-img">
                  <img src="../img/foto_pegawai/<?=$r['foto_pegawai']?>" class="img-fluid" alt="">
                  <div class="social">
                    <a href="<?=$r['telp']?>"><i class="bi bi-whatsapp"></i></a>
                    <a href=""><i class="bi bi-envelope-open"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4><?=$r['nama_pegawai']?></h4>
                  <span><?=$r['jabatan_pegawai']?></span>
                  <p><?=$r['tentang_jabatan']?></p>
                </div>
              </div>
            </div>
                      <?php } ?>
          </div>
  
        </div>
      </section><!-- End Team Section -->

  </main>