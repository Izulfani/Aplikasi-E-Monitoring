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
                    <h1 class="m-0 text-dark">Halaman Kelola Data Status Perbaikan Kendala</h1>
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
        
      
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Data Perbaikan Kendala</h3>
                        </div>
                        
                        <?php 
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM perbaikan_kendala a
                        left join kendala b ON a.id_lapor=b.id_lapor inner join teknisi c on a.id_teknisi=c.id_teknisi");
                        ?>

                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Teknisi</th>
                                        <th>Nama Objek Pajak</th>
                                        
                                        <th>Status Perbaikan</th>
                                        <th>Tanggal Perbaikan</th>
                                        <th>Waktu </th>
                                        <th>Status Alat Perekam Pajak</th>
                                        <th>Durasi Penanganan</th>
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
                                        <td><?php echo $row['nama_teknisi']; ?></td>
                                        <td><?php echo $row['nama_dataobjek']; ?></td>
                                        
                                        <td><?php echo $row['status_perkembangan']; ?></td>
                                        <td><?php echo $row['tanggal_perbaikan']; ?></td>
                                        <td><?php echo $row['waktu_perbaikan']; ?></td>
                                        <td><?php echo $row['durasi']; ?></td>
                                        <td><?php echo $row['status_perbaikan']; ?></td>
                                        
                                        
                                        
                                        <td>
                                            <a href="hapus-perbaikan.php?id_perbaikan=<?php echo $row['id_perbaikan']; ?>" class="far fa-trash-alt"></a> 
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