<?php
include "../config/koneksi.php";//memanggil koneksi//
//POST fungsinya menangkap/ jaring//

$id_kategori = $_POST['id_kategori'];//menangkap inputan//
$kategori= $_POST['kategori'];


// koneksi dan memilih database di server//
$sql_edit = mysqli_query($koneksi, "UPDATE kategori_kendala set kategori = '$kategori'
                                                                    WHERE id_kategori = '$id_kategori'");

//fungsi logika dengan javascript//
if($sql_edit){
    echo"<script> alert('Proses Edit Berhasil'); window.location='kategori-kendala.php';</script>";
} else {
    echo"<script> alert('Proses Edit Gagal!!'); history.back();</script>";
}
?>
