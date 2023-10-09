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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_nme" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>E-MoniWP</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/gaya03.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/pky.jpg">
</head>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/Palangkaraya.png" alt="alternative"></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Desi</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                   
                   
                    
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Silahkan Laporkan Kendala Anda</h2>
                    <p class="p-heading"></p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;BPPRD, Palangka Raya, 73112, Kalimantan Tengah</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:082368616475">05363231057</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:bpprd.palangkaraya@gmail.com">bpprd.palangkaraya@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    
                    <!-- Contact Form -->
                  
                   
                  
                  
                  
                  
                  
                  
                    <form role="form" action="proses-tambah-kendala.php" method="POST" enctype="multipart/form-data">
                    <input type ="hidden" name="id_dataobjek" value="<?php echo $id_dataobjek;?>">
                    <div class="form-group">
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
                        <input type="hidden" class="form-control" value="<?php echo $id_dataobjek?>" name="id_dataobjek">
                        <input type="text" class="form-control-input" value="<?php echo $npwpd?>" name="npwpd" readonly>
                      
                    </div>
                    <div class="form-group">
                            <input type="text" name ="nama_pelapor" class="form-control-input" placeholder="Silahkan Masukkan Nama Pelapor" required>
                        </div>
                        <div class="form-group">
                            <input type="text"  readonly name ="alamat_objek" value="<?php echo $alamat;?>" class="form-control-input" placeholder="Silahkan Masukkan Alamat" required>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly value="<?php echo $nama_objek;?>"name="nama_dataobjek" class="form-control-input" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <input type="date" name ="tanggal_lapor" class="form-control-input" placeholder=" Masukkan Tanggal" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control-input"   name="kategori_kendala">
                                                <option value="Software">Software</option>
                                                <option value="Hardware">Hardware</option>
                                            </select>
                        </div>
                        <div class="form-group">
                        <input type="text" name="kendala" class="form-control-input" placeholder="Silahkan Masukkan Kendala Anda" required>
                        </div>
                        
                        <div class="form-group">
                            <button name="input" type="submit"  class="form-control-submit-button">Kirim</button>
                        </div>
                        <?php 
                        }; ?>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About E-MoniWP</h6>
                        <p class="p-small">E-MoniWP merupakan website yang digunakan untuk memantau laporan kendala dari data objek yang menggunakan alat perekam pajak ( I-Tax)</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                       
                       
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/bpprdpalangkaraya">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">Mari Kunjungi Social Media Kami</p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">BPPRD Kota Palangka Raya</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->

            <div class="row">
                <div class="col-lg-12">
                 
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>