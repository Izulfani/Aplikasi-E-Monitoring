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
                            <h3 class="card-title"> Form Tambah Data Kendala</h3>
                            </div>
                            <form role="form" action="proses-tambah-objek.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                            <div class="form-group">
                            <label>NPWPD</label>
                            <div class="input-group mb-3">
                                <input type="hidden" readonly="true" class="form-control" id="id_dataobjek" name="id_dataobjek" value="-" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <input type="text" readonly="true" class="form-control" id="npwpd" value="-" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-info btn-icon-split mb-6" type="button" data-toggle="modal" data-target="#dataobjek">Pilih</button>
                            </div>
                        
                            <div class="form-group">
                            <label> Nama Pelapor </label>
                            <input type="text"  name="nama_pelapor" class="form-control"  required="required" placeholder="">
                            </div>
                            <div class="form-goup">
                            <label> Alamat Objek </label>
                            <input type="text"  name="alamat_objek" class="form-control"   required="required"placeholder="">
                            </div>
                            <div class="form-group">
                            <label> Nama Objek Pajak </label>
                            <input type="text"   readonly="true" name="nama_dataobjek" id="nama_objek" class="form-control"  required="required" placeholder="">
                            </div>
                            <div class="form-group">
                            <label> Tanggal Lapor </label>
                            <input type="text"  name="tanggal_lapor" class="form-control"  required="required" placeholder="">
                            </div>
                            <div class="form-group">
                                        <label class="col-md-2">Kategori Kendala </label>
                                        <div class="col-md-3">
                                            <select class="form-control" name="kategori_kendala">
                                                <option value="Software">Software</option>
                                                <option value="Hardware">Hardware</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                            <div class="form-group">
                            <label> Deskiripsi Kendala </label>
                            <input type="text"  name="kendala" class="form-control"  required="required" placeholder="">
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
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="dataobjek">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class=" text-center modal-title"><b>Daftar Data Objek</b> </h4>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered table-striped" id="example1" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>No</th>
            
             <th>Nama Objek Pajak</th>
             <th>NPWPD</th>
          
            <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../config/koneksi.php";
            $i = 1;
            $sql = mysqli_query($koneksi, "SELECT * from data_objek "); //menampilkan data barang//
            while ($isi = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $isi['nama_objek']; ?></td>
                <td><?= $isi['npwpd']; ?></td>
                <td>
                <button class="btn btn-info btn-icon-split" id="pilih_data_objek" data-id_dataobjek="<?= $isi['id_dataobjek'] ?>" data-npwpd="<?= $isi['npwpd'] ?>" data-nama_objek="<?= $isi['nama_objek'] ?>">
                    <span class="icon text-50">
                      <i class="fas fa-check fa-sm"></i>
                    </span>
                    <span class="text">Pilih</span>
                  </button>
                </td>
              </tr>
            <?php $i++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
        </div>
  </div>
<?php
include "footer.php" ?>