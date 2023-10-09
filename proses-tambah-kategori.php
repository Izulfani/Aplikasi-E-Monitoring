<?php
// pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$kategori = $_POST['kategori'];

//query insert
$sql = mysqli_query($koneksi, "INSERT into kategori_kendala(kategori
                                                ) VALUES 
                                                ('$kategori')");

    //fungsi logika
    if($sql){
        echo "<script> alert('Proses tambah kategori berhasil'); window.location='kategori-kendala.php';</script>";
    }else{
        echo "<script> alert('Proses tambah kategori gagal'); history.back();</script>";
    }


?>
