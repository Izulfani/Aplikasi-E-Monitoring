<?php
include "config/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-MONIWP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/pky.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="">BPPRD KOTA PALANGKA RAYA </a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link " href="#hero">Home</a></li>
              
              <!-- <li><a class="nav-link  " href="blog.html">Status Kendala</a></li> -->
              <li><a class="nav-link  " href="monitoring.php">E-Monitoring</a></li>
              <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="admin/index.php">Login Admin</a></li>
                  <li><a href="teknisi/index.php">Teknisi</a></li>
             
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/bpprd.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH KOTA PALANGKA RAYA</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#pajakdaerah" class="btn-get-started scrollto animate__animated animate__fadeInUp">Mulai</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->
  <main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section id="pajakdaerah">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Profil BPPRD Kota Palangka Raya</h2>
      <ol>
        <!-- <li><a href="index.html">Home</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li>Portfolio Details</li> -->
      </ol>
    </div>

  </div>
</section><!-- Breadcrumbs Section -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">
  <?php
                    include "config/koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT* from tentang_bpprd ");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="col-md-12">
              <img  src="tentang_pajak/<?php echo $data['foto_pajak']; ?>"" alt="">
            </div>

            <!-- <div class="swiper-slide">
              <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
            </div> -->
            <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>VISI DAN MISI</h3>
          <ul>
            <!-- <li><strong>Alamat</strong>:Jl.Yos Sudarso</li> -->
            <li><strong>Visi</strong>: 
            <?php
                    include "config/koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT* from tentang_bpprd ");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
            <p style="text-align: justify"><?php echo $data['visi'] ?></p>
            <?php } ?>
            <li><strong>Misi</strong>:
            <?php
                    include "config/koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT* from tentang_bpprd ");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
            <p style="text-align: justify"> <?php echo $data['misi'] ?>
            <?php } ?>
                                      </p>
</li>
            <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
          </ul>
        </div>
        <div class="portfolio-description">
        <?php
                    include "config/koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT* from tentang_bpprd ");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
          <h2><?php echo $data['judul_pajak'] ?></h2>
          <?php } ?>
          <?php
                    include "config/koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT* from tentang_bpprd ");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
          <p style="text-align: justify"><?php echo $data['tentang_pajak'] ?></p>
          <?php } ?>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

          
        
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div>

      </div>
    </section>End Services Section -->

    <!-- ======= Call To Action Section ======= -->
   

  <!-- ======= Footer ======= -->
  <?php include"footer.php"; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
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

