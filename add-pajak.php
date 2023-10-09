<?php

session_start();
include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (empty($_SESSION['username']) AND empty ($_SESSION['password']) ){
  echo "<script> window.location = 'login.php'</script>";
};
?>

<?php
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
            <h1 class="m-0 text-dark">Tambah Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="artikel.php">Artikel</a></li> -->
              <li class="breadcrumb-item active">Tambah Data </li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data</h3>
                        </div>
                        <form role="form" action="proses-tambah-pajak.php"method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label> Judul  </label>
                                    <input type="text" name="judul_pajak" required="required" class="form-control" placeholder="Masukkan Judul Pajak Anda">
                                </div>
                                
                                <div class="form-group">
                                    <label> Isi Tentang BPPRD</label>
                                    <textarea type="text" name="tentang_pajak" required="required" class="textarea" placeholder="Masukkan isi Pajak Anda">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label> Visi  </label>
                                    <input type="text" name="visi" required="required" class="form-control" placeholder="Masukkan Judul Pajak Anda">
                                </div>
                                <div class="form-group">
                                    <label> Misi  </label>
                                    <input type="text" name="misi" required="required" class="form-control" placeholder="Masukkan Judul Pajak Anda">
                                </div>

                                <div class="form-group">
                                    <label> Foto Artikel</label>
                                    <input type="file" accept=".jpeg,.jpg,.png" name="foto_pajak"  class="form-control" placeholder="Masukkan foto terkait artikel Anda">
                                    <span class="text-danger">* Maksimal Ukuran Foto 2MB</span>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success"> Tambah </button>
                                    <button type="reset" class="btn btn-danger"> Batal </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>