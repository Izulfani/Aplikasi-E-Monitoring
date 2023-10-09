<link rel="icon" type="image/png" href="dist/img/pky.jpg"/>
<?php
session_start();
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title"> Form Tambah Data</h3>
                            </div>
                            <form role="form" action="proses-tambah-teknisi.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                            <div class="form-group">
                            <label> Nama Teknisi </label>
                            <input type="text" name="nama_teknisi" class="form-control"  required="required" placeholder="Masukkan Nama Teknisi">
                            </div>
                            <div class="form-goup">
                            <label> Username </label>
                            <input type="text" name="username" class="form-control"  required="required" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                            <label> Password </label>
                            <input type="text" name="pass" class="form-control"  required="required" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                            <label> Bidang Perbaikan </label>
                            <select class="form-control" name="kategori">
                            <?php
                            include "config/koneksi.php";
                            $sql = mysqli_query($koneksi, "SELECT* FROM kategori_kendala ");
                            while ($data = mysqli_fetch_array($sql)) {
                                echo '<option value='.$data['id_kategori'].'>'.$data['kategori'].'</option>';
                            }
                             ?>
                                            </select>
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Tambah</button>
                            <button type="reset" class="btn btn-danger"> Batal</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


  </div>
  
<?php
include "footer.php" ?>