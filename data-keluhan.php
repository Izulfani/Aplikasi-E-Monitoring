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
                    <h1 class="m-0 text-dark">Halaman Kelola Kendala</h1>
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
        
        <a href="../cetak/cetak_laporan.php" class="btn btn-danger">Cetak PDF  </a><br></br> 
        
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Data Kendala</h3>
                        </div>
                        
                        <?php 
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM kendala a LEFT JOIN data_objek b ON a.id_dataobjek=b.id_dataobjek inner join kategori_kendala c on a.id_kategori=c.id_kategori");
                        ?>

                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPWPD Pajak</th>
                                        <!-- <th>Nama Pelapor</th> -->
                                        <th>Alamat Objek Pajak</th>
                                        <th>Nama Objek Pajak</th>
                                        <th>Tanggal Lapor</th>
                                        <th>Kategori Kendala</th>
                                        <th>Deskripsi Kendala</th>
                                        <th> Waktu </th>
                                        <th>Aksi</th>
                                        <th>Status</th>
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
                              
                                        <td><?php echo $row['alamat_objek']; ?></td>
                                        <td><?php echo $row['nama_dataobjek']; ?></td>
                                        <td><?php echo $row['tanggal_lapor']; ?></td>
                                        <td><?php echo $row['kategori']; ?></td>
                                        <td><?php echo $row['kendala']; ?></td>
                                        <td><?php echo $row['waktu']; ?></td>
                                        <td>
                                            <a href="hapus-data-kendala.php?id_lapor=<?php echo $row['id_lapor']; ?>" class="far fa-trash-alt"></a> 
                                            <a href="edit-laporan.php?id_lapor=<?php echo $row['id_lapor']; ?>"
                                               class="nav-icon fas fa-eye"></a>
                                        </td>
                                        <td><?php echo $row['status']; ?></td>
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