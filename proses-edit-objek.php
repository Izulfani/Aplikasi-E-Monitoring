<?php
// pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_dataobjek = $_POST['id_dataobjek'];
$nama_objek = $_POST['nama_objek'];
$npwpd     = $_POST['npwpd'];
$alamat     = $_POST['alamat'];
$pemasangan     = $_POST['pemasangan'];
$user     = $_POST['user'];

// koneksi dan memilih database di server//
$sql_edit = mysqli_query($koneksi, "UPDATE data_objek set nama_objek = '$nama_objek',
                                                                    npwpd= '$npwpd', alamat = '$alamat', pemasangan = '$pemasangan', user = '$user'
                                                                    WHERE id_dataobjek = '$id_dataobjek'");

    //fungsi logika
    if($sql_edit){
        echo "<script> alert('Proses edit objek berhasil'); window.location='data-objek.php';</script>";
    }else{
        echo "<script> alert('Proses edit objek gagal'); history.back();</script>";
    }


?>
