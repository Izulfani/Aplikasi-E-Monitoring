<?php
session_start();
include "../config/koneksi.php";
if(empty($_SESSION['username'])){
  echo "<script> window.location = 'index.php'</script>";
};
include "header.php";
include "sidebar.php";
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Beranda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM admin");
            $id_admin =mysqli_num_rows($sql);
          ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><div><?php echo $id_admin;?></div></h3></h3>

                <p>ADMIN</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM teknisi");
            $id_teknisi =mysqli_num_rows($sql);
          ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><div><?php echo $id_teknisi;?></div></h3></h3>

                <p>DATA TEKNISI</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="teknisi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
          <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM kategori_kendala");
            $id_kategori =mysqli_num_rows($sql);
          ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><div><?php echo $id_kategori;?></div></h3></h3>

                <p>KATEGORI KENDALA</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="kategori-kendala.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM data_objek");
            $id_dataobjek =mysqli_num_rows($sql);
          ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><div><?php echo $id_dataobjek;?></div></h3></h3>

                <p>DATA OBJEK</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="data-objek.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>



         
          <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM kendala");
            $id_lapor =mysqli_num_rows($sql);
          ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><div><?php echo $id_lapor;?></div></h3></h3>

                <p>DATA KENDALA</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="data-keluhan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       



          <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM pelayanan");
            $id_pelayanan =mysqli_num_rows($sql);
          ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><div><?php echo $id_pelayanan;?></div></h3></h3>

                <p>DATA KUALITAS PELAYANAN KENDALA</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="data-feedback.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM perbaikan_kendala");
            $id_perbaikan =mysqli_num_rows($sql);
          ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><div><?php echo $id_perbaikan;?></div></h3></h3>

                <p>DATA STATUS PERBAIKAN</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="data-perbaikan-kendala.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>















          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>