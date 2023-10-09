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
            <h1 class="m-0 text-dark">Edit Profil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="pajak.php">Profil</a></li>
              <li class="breadcrumb-item active">Edit Profil</li>
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
                            <h3 class="card-title">Form Edit Profil</h3>
                        </div>
    <?php
    include "../config/koneksi.php";
    $id_pajak= $_GET['id_pajak'];
    $sql_edit = mysqli_query($koneksi, "SELECT * FROM tentang_pajak WHERE id_pajak = '$id_pajak'");
    $row_edit = mysqli_fetch_array($sql_edit);
    $judul_pajak      = $row_edit['judul_pajak'];
    $tentang_pajak        = $row_edit['tentang_pajak'];
    $foto_pajak       = $row_edit['foto_pajak'];
    ?>
                        <form role="form" action="proses-edit-pajak.php"method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_pajak" value="<?php echo $id_pajak; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label> Judul  </label>
                                    <input type="text"  required="required"value="<?php echo $judul_pajak; ?>"
                                    name="judul_pajak" class="form-control"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label> Visi  </label>
                                    <input type="text" required="required" value="<?php echo $visi; ?>"
                                    name="visi" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label> Misi  </label>
                                    <input type="text" value="<?php echo $misi; ?>"
                                    name="misi" class="form-control" required="required" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label> Tentang BPPRD </label>
                                    <textarea type="text" name="tentang_pajak" required="required" class="textarea" ><?php echo $tentang_pajak; ?>     </textarea>
                                </div>
                                <div class="form-group">
                                    <label> Foto  </label>
                                    <input type="file" accept=".jpeg,.jpg,.png" value="<?php echo $foto_pajak; ?>"
                                    name="foto_pajak" class="form-control" placeholder="Masukkan Foto Pajak">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning"> Simpan </button>
                                    <a href="pajak.php" class="btn btn-danger"> Batal </a>
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