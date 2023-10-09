<?php
session_start();
include "config/koneksi.php";

if(!isset($_SESSION["login"])){
    header("Location: index.php");
}

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
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/font/fonts4/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/css4/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/css4/style.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">BPPRD KOTA PALANGKA RAYA </a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
              
              
              <!-- <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="admin/index.php">Login Admin</a></li> -->
                  <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li> -->
             
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
<!-- ======= Contact Section ======= -->
<div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3></h3>
            
            <form role="form" action="proses-tambah-kendala.php" method="POST" enctype="multipart/form-data">
              <!-- <div class="row"> -->
                
                <div class="col-md-14 form-group mb-3">
                <label>  </label>  
                        <?php
                        include "config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * from data_objek where id_dataobjek = '$_SESSION[id_dataobjek]'");
                        while ($isi =mysqli_fetch_array($sql)){
                          $id_dataobjek =$isi['id_dataobjek'];
                          $npwpd = $isi['npwpd'];
                          $alamat = $isi['alamat'];
                          $nama_objek = $isi['nama_objek'];
                          ?>
                  <label for="" class="col-form-label">NPWPD</label>
                  <input type="hidden" class="form-control" value="<?php echo $id_dataobjek?>" name="id_dataobjek">
                  <input type="text" class="form-control" value="<?php echo $npwpd?>" name="npwpd" id="npwpd" placeholder="Your name"  readonly>
                </div>
                <!-- <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Nama Pelapor</label>
                  <input type="text" class="form-control" required="required" name="nama_pelapor" id="nama_pelapor"  placeholder="Masukkan Nama Pelapor">
                </div>
              </div> -->

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat_objek" id="alamat_objek" readonly value="<?php echo $alamat;?>"  placeholder="Phone #">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Nama Objek Pajak</label>
                  <input type="text" class="form-control" readonly value="<?php echo $nama_objek;?>"name="nama_dataobjek"  id="nama_dataobjek"  placeholder="Company  name">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Tanggal Lapor</label>
                  <input type="date" class="form-control" name="tanggal_lapor" id="tanggal_lapor"  placeholder="Company  name">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Kategori Kendala</label>
                  <select  name ="kategori" class="form-select" aria-label="Default select example">
                    <option value="">-- Pilih Kategori --</option>
                  <?php
                      include "config/koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT* from kategori_kendala");
                      while ($data = mysqli_fetch_array($sql)) {
                       echo '<option value='.$data['id_kategori'].'>'.$data['kategori'].'</option>';
                      }
                  ?>
                  </select>
                </div>
                
              </div>
                
              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Kendala</label>
                  <textarea class="form-control" required="required" name="kendala" id="kendala" cols="30" rows="4"  placeholder="Masukkan Kendala"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Kirim Laporan" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
              <?php 
                        }; ?>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <h3>Silahkan Laporkan Kendala</h3>
            <p class="mb-5">Silahkan Laporkan Kendala Penggunaan Aplikasi/Alat Perekam Transaksi Wajib Pajak Pada Form Ini</p>
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon icon-room mr-3"></span>
                <span class="text">BPPRD, Palangka Raya, 73112, Kalimantan Tengah</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>
                <span class="text">  05363231057</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <span class="text"> <a href="mailto:bpprd.palangkaraya@gmail.com"> bpprd.palangkaraya@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
  <!-- ======= Footer ======= -->
  <footer id="footer">
   
      <div class="copyright">
        &copy; Copyright <strong>BPPRD KOTA PALANGKA RAYA</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

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