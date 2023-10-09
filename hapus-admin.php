<?php

include "../config/koneksi.php";

$id_admin = $_GET['id_admin'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin = '$id_admin'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Data  Berhasil!'); window.location='admin.php'; </script>";
}else{
    echo "<script>aler('Proses Hapus Gagal'); window.location='admin.php'; </script>";
}

?>