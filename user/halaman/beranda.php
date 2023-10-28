
    
    <!-- ======= Hero No Slider Section ======= -->  
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <img src="./assets/img/logo/k2putih.png" class="logo" alt="" width="80" height="80">
          <h2>PT KHAILABS KREATIF MEDIA</h2>
          <p>Pengembangan Game Mobile dan Aplikasi VR/AR</p>
          <a href=".?halaman=contact" class="btn-get-started ">Contact us</a>
        </div>
      </div>
    </div>
  </section>
<!-- End Hero No Slider Sectio -->

    

<!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 video-box">
          <img src="assets/img/whyus9.jpg" class="img-fluid" alt="" >
        </div>
        
        <div class="col-lg-7 d-flex flex-column justify-content-center p-5">
        <?php
                $sql = "SELECT * FROM tb_biodata";
                $q = mysqli_query($k, $sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
        <h4>
          Visi
            </h4>
            <p class="description">
            <?=$r['visi']?>
            <h4>
          Misi
            </h4>
            <p class="description">
            <?=$r['misi']?>
            </p>
        <?php } ?>
        </div>
      </div>
    </div>
  </section>
<!-- End Why Us Section -->


<!-- ======= Services Section ======= -->
<section class="services">

      <div class="container">

        <div class="row">
        <div class="col-lg-12" data-aos="fade-up" date-aos-delay="200">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Service</li>
            <h2>What We Do</h2>
          </ul>
        </div>

          <div class="col-md-4 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Design</a></h4>
              <p class="description">Membuat designe pada game sebaik mungkin agar dapat menarik perhatian para gamers</p>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Kerja Sama</a></h4>
              <p class="description">Bekerja sama dengan perusahan game profesionlan lainnya</p>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx  bx-tachometer"></i></div>
              <h4 class="title"><a href="">Trouble</a></h4>
              <p class="description">Mengatasi masalah error yang terjadi pada project Game yang sedang dikembangkan.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


<!-- ======= Portfolio Section ======= -->
  <section class="portfolio">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Portfolio</li>
            <h2>Our Games</h2>
          </ul>
        </div>
      </div>
      
      <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <?php
          $sql = "SELECT * FROM tb_portfolio order by id_portfolio desc limit 8 ";
          $q = mysqli_query($k, $sql);
          while($r = mysqli_fetch_assoc($q)){
        ?>
        
        <div class="col-lg-3 col-md-6 portfolio-wrap filter-app ">
          <div class="portfolio-item">
            <img src="../img/portfolio/<?=$r['gambar_portfolio']?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3><?=$r['judul_portfolio']?></h3>
              <div>
                <a href="../img/portfolio/<?=$r['gambar_portfolio']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$r['judul_portfolio']?>"><i class="bx bx-plus"></i></a>
                <a href=".?halaman=portfoliodetail&id_portfolio=<?= $r["id_portfolio"]?>" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    
    </div>
  </section>
<!-- End Portfolio Section -->

<!-- ======= Team Section ======= -->
  <div class="section-title">
    <h2>Our Team</h2>
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="row">

          <?php
            $sql1 = "SELECT * FROM tb_pegawai order by id_pegawai asc limit 8 ";
            $q1 = mysqli_query($k, $sql1);
            while($r1 = mysqli_fetch_assoc($q1)){
          ?>
          
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="../img/foto_pegawai/<?=$r1['foto_pegawai']?>" class="img-fluid" alt="">
                <div class="social">
                    <a href=""><i class="bi bi-whatsapp"></i></a>
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?=$r1['nama_pegawai']?></h4>
                <span><?=$r1['jabatan_pegawai']?></span>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </div>
  <!-- End Team Section -->