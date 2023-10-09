<?php
//file ini merupakan file login untuk admin
session_start();
include "config/koneksi.php";


//mendapatkan input dari pengguna
$username=$_POST['username'];
$pass=$_POST['pass'];

//mencek di database tabel admin adakah username dan password
$login="SELECT * FROM teknisi WHERE username='$username'";
$cek=mysqli_query($koneksi,$login);
$ketemu=mysqli_num_rows($cek);

$login2="SELECT * FROM teknisi WHERE pass='$pass'";
$cek2=mysqli_query($koneksi,$login2);
$ketemu2=mysqli_num_rows($cek2);

$login3="SELECT * FROM teknisi WHERE username='$username' AND pass='$pass'";
$cek3=mysqli_query($koneksi,$login3);
$ketemu3=mysqli_num_rows($cek3);

$r=mysqli_fetch_array($cek3);

//menampilkan pesan gagal jika belum memasukkan username dan password
if ($ketemu ==0 & $ketemu2==0){
    echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'loginteknisi.php'</script>";
}
//menampilkan pesan gagal jika username salah
else if ($ketemu ==0){
    echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'loginteknisi.php'</script>";
}
//menampilkan pesan gagal jika password salah
else if ($ketemu2 ==0){
    echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'loginteknisi.php.php'</script>";
}

//jika ketemu dibuat sesi loginnya
else {
    //detail sesi loginnya
    $_SESSION['id_teknisi']=$r['id_teknisi'];
    $_SESSION['username']=$r['username'];
    $_SESSION['password']=$r['pass'];
    $_SESSION['nama_teknisi']=$r['nama_teknisi'];
    $_SESSION['status']= 'teknisi';

//login berhasil
echo "<script> alert ('Login Berhasil');
    window.location = 'form-teknisi.php'</script>";
}
