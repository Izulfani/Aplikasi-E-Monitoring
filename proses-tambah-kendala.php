<?php
// pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_pelapor = $_POST['nama_pelapor'];
$nama_objek     = $_POST['nama_objek'];
$tanggal_lapor     = $_POST['tanggal_lapor'];
$kendala     = $_POST['kendala'];

//query insert
$sql = mysqli_query($koneksi, "INSERT into kendala(
                                                nama_pelapor, 
                                                nama_dataobjek, tanggal_lapor, kendala) VALUES 
                                                ('$nama_pelapor', 
                                                '$nama_dataobjek', 
                                                '$tanggal_lapor, '$kendala')");

    //fungsi logika
    if($sql){
        echo "<script> alert('Proses tambah admin berhasil'); window.location='data-keluhan.php';</script>";
    }else{
        echo "<script> alert('Proses tambah admin gagal'); history.back();</script>";
    }


?>
