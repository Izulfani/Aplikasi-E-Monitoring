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
                    <h1 class="m-0 text-dark">Halaman Kelola Data Objek</h1>
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
    <!-- mulai dari sini content-->
    <section class="content">
        <div class="container-fluid">
        
        <a href="add-objekpajak.php" class="btn btn-primary">Tambah Data Objek</a> <a href="import.php" class="btn btn-success">Import Excel</a> <br></br>
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Data Objek</h3>
                        </div>
                        
                        <?php 
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_objek");
                        ?>

                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Objek Pajak</th>
                                        <th>NPWPD</th>
                                        <th>Alamat</th>
                                        <th>Periode Pemasangan</th>
                                        <th>User</th>
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
                                        <td><?php echo $row['nama_objek']; ?></td>
                                        <td><?php echo $row['npwpd']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><?php echo $row['pemasangan']; ?></td>
                                        <td><?php echo $row['user']; ?></td>
                                        <td><a href="edit-data-objek.php?id_dataobjek=<?php echo $row['id_dataobjek']; ?>" class="nav-icon fas fa-edit"></a> 
                                            <a href="hapus-dataobjek.php?id_dataobjek=<?php echo $row['id_dataobjek']; ?>" class="far fa-trash-alt"></a> 
                                        </td>
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
    <!-- sampai sini content -->


</div>
<!-- /.content-wrapper -->

<?php include "footer.php"; ?>