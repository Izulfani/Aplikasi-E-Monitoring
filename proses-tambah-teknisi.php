<?php
// pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_teknisi= $_POST['nama_teknisi'];
$username     = $_POST['username'];
$pass     = $_POST['pass'];
$id_kategori = $_POST['kategori'];
//query insert
$sql = mysqli_query($koneksi, "INSERT into teknisi (nama_teknisi, 
                                                username, 
                                                pass,id_kategori) VALUES 
                                                ('$nama_teknisi', 
                                                '$username', 
                                                '$pass','$id_kategori')");

    //fungsi logika
    if($sql){
        echo "<script> alert('Proses tambah teknisi berhasil'); window.location='teknisi.php';</script>";
    }else{
        echo "<script> alert('Proses tambah teknisi gagal'); history.back();</script>";
    }


?>
