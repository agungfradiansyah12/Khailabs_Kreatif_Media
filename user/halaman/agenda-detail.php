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
  <?php
                $sql = "SELECT * FROM tb_agenda where id_agenda= '$_GET[id]'";
                $q = mysqli_query($k, $sql);
                $r = mysqli_fetch_assoc($q);
                ?>
    <!-- ======= agenda Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>agenda</h2>

          <ol>
            <li><a href=".">Home</a></li>
            <li><a href=".?halaman">agenda</a></li>
            <li><?=$r['judul_agenda']?></li>
          </ol>
        </div>
                    
      </div>
    </section><!-- End agenda Section -->

    <!-- ======= agenda Single Section ======= -->
    <section id="agenda" class="agenda">
      <div class="container" data-aos="fade-up">
    
            <article class="entry entry-single">

              <h2 class="entry-title">
                <?=$r['judul_agenda']?>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><time datetime="2020-01-01"><?=$r['tanggal_agenda']?></time>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                <?=$r['konten_agenda']?>
                </p>
              </div>


            </article><!-- End agenda entry -->





      </div>
    </section><!-- End agenda Single Section -->

    
  </main><!-- End #main -->

  <script src="js/jquery-2.2.3.min.js"></script>
    <!--/aos -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script>
    <!--//aos -->
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!--// end-smoth-scrolling -->


  <script src="assets/js/main.js"></script>

</body>

</html>