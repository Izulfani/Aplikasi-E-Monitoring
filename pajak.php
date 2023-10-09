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
            <h1 class="m-0 text-dark">Halaman Kelola Profil BPPRD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item active">Tentang BPPRD</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

        <!-- <a href="add-pajak.php" class="btn btn-primary">Tambah Data</a><br></br> -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Profil</h3>
                        </div>

                        <?php
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT*FROM tentang_bpprd");
                        ?>

                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul </th>
                                    <th>Tentang BPPRD</th>
                                    <th>Foto Artikel</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                        <?php
                        $no = 1;
                        while($row = mysqli_fetch_array($sql)){
                        ?>    
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['judul_pajak']; ?></td>
                                    <td><?php echo $row['tentang_pajak']; ?></td>
                                    <td><img src="../tentang_pajak/<?php echo $row['foto_pajak']; ?>" style="width: 100px;height: 75px;"></td>
                                    <td><?php echo $row['visi']; ?></td>
                                    <td><?php echo $row['misi']; ?></td>
                                    
                                    
                                    <td><a href="edit-pajak.php?id_pajak=<?php echo $row['id_pajak']; ?>" 
                                       class="nav-icon fas fa-edit"></a>
                                        
                                </tr>
                        <?php } ?>
                            </tbody>
                        </table>
                            
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>