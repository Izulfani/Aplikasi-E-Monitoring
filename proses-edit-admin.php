<?php
include "../config/koneksi.php";//memanggil koneksi//
//POST fungsinya menangkap/ jaring//

$id_admin = $_POST['id_admin'];//menangkap inputan//
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$pass = $_POST['pass'];

// koneksi dan memilih database di server//
$sql_edit = mysqli_query($koneksi, "UPDATE admin set nama_lengkap = '$nama_lengkap',
                                                                    username = '$username', pass = '$pass'
                                                                    WHERE id_admin = '$id_admin'");

//fungsi logika dengan javascript//
if($sql_edit){
    echo"<script> alert('Proses Edit Berhasil'); window.location='admin.php';</script>";
} else {
    echo"<script> alert('Proses Edit Gagal!!'); history.back();</script>";
}
?>
