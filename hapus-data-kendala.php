<?php

include "../config/koneksi.php";

$id_lapor = $_GET['id_lapor'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM kendala WHERE id_lapor = '$id_lapor'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Data Kendala Berhasil!'); window.location='data-keluhan.php'; </script>";
}else{
    echo "<script>alert('Proses Hapus Gagal'); window.location='data-keluhan.php'; </script>";
}

?>