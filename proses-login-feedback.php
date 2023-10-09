<?php
//file ini merupakan file login untuk admin
session_start();
include "config/koneksi.php";

//mendapatkan input dari pengguna
$user=$_POST['user'];
$npwpd=$_POST['npwpd'];

//mencek di database tabel admin adakah username dan password
$login="SELECT * FROM data_objek WHERE npwpd='$npwpd'";
$cek=mysqli_query($koneksi,$login);
$ketemu=mysqli_num_rows($cek);

$login2="SELECT * FROM data_objek WHERE user='$user'";
$cek2=mysqli_query($koneksi,$login2);
$ketemu2=mysqli_num_rows($cek2);

$login3="SELECT * FROM data_objek WHERE npwpd='$npwpd' AND user='$user'";
$cek3=mysqli_query($koneksi,$login3);
// $row = mysqli_fetch_array($cek3);
$ketemu3=mysqli_num_rows($cek3);

$r=mysqli_fetch_array($cek3);

//menampilkan pesan gagal jika belum memasukkan username dan password
if ($ketemu ==0 & $ketemu2==0){
    echo "<script> alert ('NPWD dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'index.php'</script>";
}
//menampilkan pesan gagal jika username salah
else if ($ketemu ==0){
    echo "<script> alert ('NPWPD dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'index.php'</script>";
}
//menampilkan pesan gagal jika password salah
else if ($ketemu2 ==0){
    echo "<script> alert ('NPWPD dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'index.php'</script>";
}

//jika ketemu dibuat sesi loginnya
else {
    //detail sesi loginnya
    $_SESSION['id_dataobjek']=$r['id_dataobjek'];
    $_SESSION['user']=$r['user'];
    $_SESSION['nama_objek']=$r['nama_objek'];
    $_SESSION['npwpd']=$r['npwpd'];
    $_SESSION['alamat']=$r['alamat'];
    $_SESSION['pemasangan']=$r['pemasangan'];
    $_SESSION['status']= 'data_objek';
    $_SESSION['login']= true;


//login berhasil
echo "<script> alert ('Berhasil Masuk');
    window.location = 'feedback-pelayanan.php'</script>";
}
