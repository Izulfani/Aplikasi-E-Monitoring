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
                            <form role="form" action="proses-tambah-objek.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                            <div class="form-group">
                            <label> Nama Objek </label>
                            <input type="text" name="nama_objek" class="form-control"  required="required" placeholder="Masukkan Nama Objek">
                            </div>
                            <div class="form-goup">
                            <label> NPWPD </label>
                            <input type="text" name="npwpd" class="form-control"  required="required" placeholder="Masukkan NPWPD ">
                            </div>
                            <div class="form-group">
                            <label> Alamat </label>
                            <input type="text" name="alamat" class="form-control"  required="required" placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                            <label> Periode Pemasangan </label>
                            <input type="text" name="pemasangan" class="form-control"  required="required" placeholder="Masukkan Periode Pemasangan">
                            </div>
                            <div class="form-group">
                            <label> User </label>
                            <input type="text" name="user" class="form-control"  required="required" placeholder="Masukkan Periode User">
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