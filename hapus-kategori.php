<?php

include "../config/koneksi.php";

$id_kategori = $_GET['id_kategori'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM kategori_kendala WHERE id_kategori = '$id_kategori'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Kategori Berhasil!'); window.location='kategori-kendala.php'; </script>";
}else{
    echo "<script>aler('Proses Hapus Gagal'); window.location='kategori-kendala.php'; </script>";
}

?>