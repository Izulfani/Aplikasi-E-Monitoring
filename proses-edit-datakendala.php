<?php
// pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_pelapor = $_POST['nama_pelapor'];
$nama_dataobjek     = $_POST['nama_dataobjek'];
$tanggal_lapor     = $_POST['tanggal_lapor'];
$kendala     = $_POST['kendala'];

// koneksi dan memilih database di server//
$sql_edit = mysqli_query($koneksi, "UPDATE data_kendala set nama_pelapor = '$nama_pelapor',
                                                                    nama_dataobjek= '$nama_dataobjek', tanggal_lapor = '$tanggal_lapor', kendala = '$kendala'
                                                                    WHERE id_lapor = '$id_lapor'");

    //fungsi logika
    if($sql){
        echo "<script> alert('Proses tambah admin berhasil'); window.location='data-kendala.php';</script>";
    }else{
        echo "<script> alert('Proses tambah admin gagal'); history.back();</script>";
    }


?>
