<?php

include "../config/koneksi.php";

$id_teknisi = $_GET['id_teknisi'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM teknisi WHERE id_teknisi = '$id_teknisi'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Data  Berhasil!'); window.location='teknisi.php'; </script>";
}else{
    echo "<script>aler('Proses Hapus Gagal'); window.location='teknisi.php'; </script>";
}

?>