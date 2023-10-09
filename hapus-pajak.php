<?php

include "../config/koneksi.php";

$id_pajak = $_GET['id_pajak'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM tentang_bpprd WHERE id_pajak = '$id_pajak'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Berhasil'); window.location='pajak.php'; </script>";
} else {
    echo "<script>alert('Proses Hapus Gagal'); window.location='pajak.php'; </script>";
}

?>