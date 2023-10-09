<?php
// pemanggilan koneksi
include "config/koneksi.php";

//deklarasi variabel
$nama_objek = htmlspecialchars($_POST['nama_objek']);
$npwpd     = $_POST['npwpd'];
$alamat    = $_POST['alamat'];
$pemasangan = $_POST['pemasangan'];
$user = $_POST['user'];

//query insert


$cek = mysqli_query($koneksi,"SELECT * FROM data_objek where npwpd='$npwpd'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script> alert('NPWPD $npwpd Sudah Ada, '); window.location='daftar-akun.php'</script>";
} else {
    $query = "INSERT INTO data_objek (npwpd,nama_objek,alamat,pemasangan,user) VALUES ('$npwpd','$nama_objek','$alamat','$pemasangan','$user')";
}

$hasil = mysqli_query($koneksi,$query);
    //fungsi logika
    if($hasil){
        echo "<script> alert('Berhasil Melakukan Pendaftaran'); window.location='daftar-akun.php';</script>";
    }else{
        echo "<script> alert('Proses Daftar Gagal'); history.back();</script>";
    }


?>
