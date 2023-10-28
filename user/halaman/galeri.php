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
  
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri</h2>

          <ol>
            <li><a href=".?halaman=beranda">Home</a></li>
            <li>Galeri</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->
   <!-- ======= Service Details Section ======= -->


    <section class="galeri">

      <div class="container">

        <div class="row">
        <?php
                $sql = "SELECT * FROM tb_galeri";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <a href="../img/galeri/<?=$r['gambar']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$r['judul_galeri']?>"><img src="../img/galeri/<?=$r['gambar']?>" alt="..."></a>
                
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="../img/galeri/<?=$r['gambar']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$r['judul_galeri']?>" ><?=$r['judul_galeri']?></a></h5>
              </div>
            </div>
            </div>
            <?php }?>
          

        </div>
    </div>

    </section><!-- End Service Details Section -->

  </main>

  