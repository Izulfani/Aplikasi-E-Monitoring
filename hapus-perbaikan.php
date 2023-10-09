<?php

include "../config/koneksi.php";

$id_perbaikan = $_GET['id_perbaikan'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM perbaikan_kendala WHERE id_perbaikan = '$id_perbaikan'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Berhasil!'); window.location='data-perbaikan-kendala.php'; </script>";
}else{
    echo "<script>aler('Proses Hapus Gagal'); window.location='data-perbaikan-kendala.php'; </script>";
}

?>