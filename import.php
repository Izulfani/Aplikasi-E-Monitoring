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
            <h1 class="m-0 text-dark">Import Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="artikel.php">Import Data Objek Pajak</a></li>
              <li class="breadcrumb-item active"></li>
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
                        <form role="form" action="proses-excel.php"method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                             

                                <div class="form-group">
                                    <label for="file"> Silahkan Import Data Excel</label>
                                    <input type="file"name="berkas_excel"   class="form-control" placeholder="">
                                    <a href="dummy_data/data_objek_dummy.xls">Data contoh upload<a>
                                </div>
                                <div class="card-footer">
                                    <button type="submit"  class="btn btn-success"> Tambah </button>
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