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
                    <h1 class="m-0 text-dark">Halaman Feedback Kualtias Pelayanan Kendala</h1>
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
                            <h3 class="card-title">Kualitas Pelayanan Kendala</h3>
                        </div>
                        
                        <?php 
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM pelayanan a
                        LEFT JOIN data_objek b ON a.id_dataobjek=b.id_dataobjek");
                        ?>

                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPWPD Pajak</th>
                                        <th>Nama Objek Pajak</th>
                                        <th>Tanggal</th>
                                        <th>Kualitas Pelayanan</th>
                                        <th>Saran</th>
                                        
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
                                        <td><?php echo $row['npwpd']; ?></td>
                                        <td><?php echo $row['nama_objekusaha']; ?></td>
                                        <td><?php echo $row['tanggal_feedback']; ?></td>
                                        <td><?php echo $row['kualitas_pelayanan']; ?></td>
                                        <td><?php echo $row['saran']; ?></td>
                                        
                                        <td>
                                            <a href="hapus-feedback.php?id_pelayanan=<?php echo $row['id_pelayanan']; ?>" class="far fa-trash-alt"></a> 
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