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
            <form method="POST"  action="proses-tambah-perbaikan.php" id="signup-form" class="signup-form">
                <h2 class="form-title">Teknisi Melapor</h2>
                <div class="form-group">
                <select  name ="nama_objek" class="form-input" aria-label="Default select example">
                    <option value="">-- Pilih Objek Pajak --</option>
                    <?php
                      include "config/koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT* from data_objek ");
                      while ($data = mysqli_fetch_array($sql)) {
                       echo '<option>'.$data['nama_objek'].'</option>';
                      }
                  ?>
                  </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="status_perbaikan" id="status_perbaikan" placeholder="Masukkan Status Perbaikan Kendala "/>
                </div>
               
               
                
                
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
