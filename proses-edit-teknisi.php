<?php
include "../config/koneksi.php";//memanggil koneksi//
//POST fungsinya menangkap/ jaring//

$id_teknisi = $_POST['id_teknisi'];//menangkap inputan//
$nama_teknisi = $_POST['nama_teknisi'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$id_kategori = $_POST['kategori'];

// koneksi dan memilih database di server//
$sql_edit = mysqli_query($koneksi, "UPDATE teknisi set nama_teknisi = '$nama_teknisi',
                                                                    username = '$username', pass = '$pass', id_kategori = '$id_kategori'
                                                                    WHERE id_teknisi = '$id_teknisi'");

//fungsi logika dengan javascript//
if($sql_edit){
    echo"<script> alert('Proses Edit Berhasil'); window.location='teknisi.php';</script>";
} else {
    echo"<script> alert('Proses Edit Gagal!!'); history.back();</script>";
}
?>
