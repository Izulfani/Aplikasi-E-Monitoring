<?php

include "../config/koneksi.php";

$id_pelayanan = $_GET['id_pelayanan'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM pelayanan WHERE id_pelayanan = '$id_pelayanan'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Berhasil!'); window.location='data-feedback.php'; </script>";
}else{
    echo "<script>aler('Proses Hapus Gagal'); window.location='data-feedback.php'; </script>";
}

?>