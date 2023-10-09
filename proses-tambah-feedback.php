<?php
// pemanggilan koneksi
include "config/koneksi.php";

//deklarasi variabel
$id_dataobjek = $_POST['id_dataobjek'];
$nama_objek = $_POST['nama_objekusaha'];
$tanggal_feedback = $_POST['tanggal_feedback'];
$kualitas_pelayanan    = $_POST['kualitas_pelayanan'];
$saran     = $_POST['saran'];

//query insert
$sql = mysqli_query($koneksi, "INSERT into pelayanan (id_dataobjek, nama_objekusaha, tanggal_feedback,
                                                kualitas_pelayanan, 
                                                saran) VALUES 
                                                ('$id_dataobjek','$nama_objek', '$tanggal_feedback',
                                                '$kualitas_pelayanan', 
                                                '$saran')");

    //fungsi logika
    if($sql){
        echo "<script> alert('Proses berhasil'); window.location='feedback-pelayanan.php';</script>";
    }else{
        echo "<script> alert('Proses  gagal'); history.back();</script>";
    }


?>
