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
                            <h3 class="card-title"> </h3>
                            </div>
                            <?php 
                            include"../config/koneksi.php";
                            $id_lapor = $_GET['id_lapor'];
                            $sql_edit = mysqli_query($koneksi, "SELECT * FROM kendala a
                            LEFT JOIN data_objek b ON a.id_dataobjek=b.id_dataobjek where id_lapor = '$id_lapor'");//query//
                            $row_edit = mysqli_fetch_array($sql_edit);//narik data array//
                            $id_dataobjk = $row_edit['id_dataobjek'];//menarik data//
                           
                            $alamat_objek    = $row_edit['alamat_objek'];//menarik data//
                            $nama_dataobjek        = $row_edit['nama_dataobjek'];//menarik data//
                            $tanggal_lapor    = $row_edit['tanggal_lapor'];//menarik data//
                            $id_kategori        = $row_edit['id_kategori'];//menarik data//
                            $kendala        = $row_edit['kendala'];//menarik data//
                            ?>
                            <form role="form" action="proses-edit-laporan.php" method="POST" enctype="multipart/form-data">
                            <input type ="hidden" name="id_lapor" value="<?php echo $id_lapor;?>">
                            <div class="card-body">
                            <div class="form-group">
                           <label> NPWPD Pajak </label>  
                            <?php
                            include "../config/koneksi.php";
                             $sql = mysqli_query($koneksi, "SELECT * from data_objek where id_dataobjek = '$id_dataobjk'");
                             while ($isi =mysqli_fetch_array($sql)){
                             $id_dataobjek =$isi['id_dataobjek'];
                             $npwpd = $isi['npwpd'];
                             ?>
                            <input type="hidden" readonly class="form-control" value="<?php echo $id_dataobjek?>" name="id_dataobjek">
                            <input type="text" class="form-control" value="<?php echo $npwpd?>" name="npwpd" readonly>
                        
                               <?php 
                             }; ?>
                             </input>
                            </div>
                             
                            
                            <div class="form-goup">
                            <label> Alamat Objek </label>
                            <input type="text" readonly value="<?php echo $alamat_objek;?>" name="alamat_objek" class="form-control"   required="required"placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                            <label> Nama Objek Pajak </label>
                            <input type="text" readonly value="<?php echo $nama_dataobjek;?>" name="nama_dataobjek" class="form-control"  required="required" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                            <label> Tanggal Lapor </label>
                            <input type="text" readonly value="<?php echo $tanggal_lapor;?>" name="tanggal_lapor" class="form-control"  required="required" placeholder="">
                            </div>
                              <div class="form-group">
                            <label> Kategori Kendala </label>
                            <?php
                            include "../config/koneksi.php";
                             $sql = mysqli_query($koneksi, "SELECT * from kategori_kendala where id_kategori = '$id_kategori'");
                             while ($isi =mysqli_fetch_array($sql)){
                             $id_kategori =$isi['id_kategori'];
                             $kategori = $isi['kategori'];
                             ?>
                           <input type="hidden" readonly class="form-control" value="<?php echo $id_kategori?>" name="id_kategori">
                            <input type="text" class="form-control" value="<?php echo $kategori?>" name="kategori" readonly>
                        
                               <?php 
                             }; ?>
                             </input>
                            </div>
                            <div class="form-group">
                            <label> Deskiripsi Kendala </label>
                            <input type="text" readonly value="<?php echo $kendala;?>" name="kendala" class="form-control"  required="required" placeholder="">
                            </div>
                            <div class="form-group">
                                        <label class="col-md-2">Status </label>
                                        <div class="col-md-3">
                                            <select class="form-control" name="status">
                                                <option value="Laporan Kendala Diproses">Laporan Kendala Diproses..</option>
                                                <option value="Teknisi Menuju Lokasi">Teknisi Menuju Lokasi</option>
                                                <option value="Teknisi Menuju Lokasi">Teknisi Sudah Menangani Kendala</option>
                                                <option value="Kendala Selesai Diperbaiki">Kendala Selesai Diperbaiki</option>
                                            </select>
                                        </div>
                                    </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Simpan</button>
                            <a href="data-keluhan.php" type="reset" class="btn btn-danger"> Batal</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


  </div>
  
  <?php include "footer.php";
  ?>