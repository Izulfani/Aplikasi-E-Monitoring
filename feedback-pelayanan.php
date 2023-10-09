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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-MoniWP</title>
    <link href="images/pky.jpg" rel="icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="assets2/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="teknisi.css">
</head>
<body>

<div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form method="POST"  action="proses-tambah-feedback.php" id="signup-form" class="signup-form">
            
                <h2 class="form-title">Kepuasan Kualitas Pelayanan Terhadap Perbaikan Kendala</h2>
               
                <div class="form-group">
                <?php
                        include "config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * from data_objek where id_dataobjek = '$_SESSION[id_dataobjek]'");
                        while ($isi =mysqli_fetch_array($sql)){
                          $id_dataobjek =$isi['id_dataobjek'];
                          $npwpd = $isi['npwpd'];
                        //   $alamat = $isi['alamat'];
                          $nama_objek = $isi['nama_objek'];
                          ?>
                          <input type="text"  readonly class="form-input" value="<?php echo $npwpd?>" name="npwpd" id="npwpd" placeholder="Masukkan Nama Wajib Pajak"/>
                            <input type="hidden" class="form-input" value="<?php echo $id_dataobjek?>" name="id_dataobjek">
                  
                </div>
                <div class="form-group">
                    <input type="text" readonly class="form-input" value="<?php echo $nama_objek;?>"name="nama_objekusaha"  id="nama_objekusaha" placeholder="Masukkan Nama Wajib Pajak"/>
                </div>
                <label for="">
                    <h5>Tingkat Kepuasan</h5>
                </label> <br>
                <div class="text-center">
                    <div class="radio col-up">
                        <input type="radio" name="kualitas_pelayanan" value="Tidak Puas" checked>
                        <label for="">Tidak Puas</label>
                        <span style='font-size:300%;'>&#128528;</span>
                    </div>&emsp;
                    <div class="radio col-up">
                        <input type="radio" name="kualitas_pelayanan" value="Puas">
                        <label for="">Puas</label>
                        <span style='font-size : 300%;'>&#128516;</span>
                    </div>&emsp;
                    <div class="radio col-up">
                        <input type="radio" name="kualitas_pelayanan" value="Sangat Puas">
                        <label for="">Sangat Puas</label>
                        <span style='font-size:300%;'>&#128525;</span>
                    </div>
                    <div class="form-group">
                    <input type="date" class="form-input" name="tanggal_feedback"  id="tanggal_feedback" placeholder="Masukkan Nama Wajib Pajak"/>
                </div>
                    <textarea class="form-input" name="saran" id="saran" placeholder="Saran"></textarea>
                </div>
                <?php } ?>   
               
               
                
                
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Kirim"/>
                </div>
            </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
