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
                            <h3 class="card-title"> Edit Kategori</h3>
                            </div>
                            <?php 
                            include"../config/koneksi.php";
                            $id_kategori = $_GET['id_kategori'];
                            $sql_edit = mysqli_query($koneksi, "SELECT * FROM kategori_kendala WHERE id_kategori = '$id_kategori'");//query//
                            $row_edit = mysqli_fetch_array($sql_edit);//narik data array//
                            $kategori = $row_edit['kategori'];//menarik data//
                           
                            ?>
                            <form role="form" action="proses-edit-kategori.php" method="POST" enctype="multipart/form-data">
                            <input type ="hidden" name="id_kategori" value="<?php echo $id_kategori;?>">
                            <div class="card-body">
                            <div class="form-group">
                            <label> Nama Kategori </label>
                            <input type="text" value="<?php echo $kategori;?>" name="kategori" class="form-control"  required="required" placeholder="Masukkan Nama Barang">
                            </div>
                           
                            <div class="card-footer">
                            <div class="modal fade" id="editModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Apakah Anda Yakin Ingin Mengedit?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"></span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                  <button type="submit" class="btn btn-primary" href="../admin.php" >Ya</button>
                                </div>
                              </div>
                            </div>
                            </div>

                            <button  class="btn btn-primary" type="button" data-toggle="modal" data-target="#editModal"> Simpan</button>
                            <a href="admin.php" type="reset" class="btn btn-danger"> Batal</a>
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