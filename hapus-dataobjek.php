<?php

include "../config/koneksi.php";

$id_dataobjek = $_GET['id_dataobjek'];
$sql_hapus = mysqli_query($koneksi, "DELETE FROM data_objek WHERE id_dataobjek = '$id_dataobjek'");

if($sql_hapus){
    echo "<script>alert('Proses Hapus Data Objek Berhasil!'); window.location='data-objek.php'; </script>";
}else{
    echo "<script>alert('Proses Hapus Gagal'); window.location='data-objek.php'; </script>";
}

?>