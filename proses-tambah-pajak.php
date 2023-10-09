<?php

include "../config/koneksi.php";

$judul_pajak  = $_POST['judul_pajak'];
$visi = $_POST['visi'];
$misi  = $_POST['misi'];
$tentang_pajak       = $_POST['tentang_pajak'];
$lokasi_file       = $_FILES['foto_pajak']['tmp_name'];
$nama_file         = $_FILES['foto_pajak']['name'];
$ukuran_file       = $_FILES['foto_pajak']['size'];

$cek = mysqli_query($koneksi,"SELECT * FROM tentang_bpprd where foto_pajak='$nama_file'");

if (mysqli_num_rows($cek) > 0) {
    echo "<script> alert('Nama Foto $nama_file Sudah Ada, Tidak Bisa Tambah Data'); window.location='pajak.php'</script>";
} elseif (empty($lokasi_file)){
    $query = "INSERT INTO tentang_bpprd (judul_pajak) VALUES ('$judul_apajak')";
} elseif ($ukuran_file <= 2048000) {
    move_uploaded_file($lokasi_file, '../tentang_pajak/' . $nama_file);
    $query = "INSERT INTO tentang_bpprd (judul_pajak, tentang_pajak, foto_pajak,visi,misi) VALUES ('$judul_pajak', '$visi','$misi','$tentang_pajak', '$nama_file' )";
} elseif ($ukuran_file = 2048000) {
    echo "<script> alert('Ukuran Foto $nama_file Lebih Dari 2 MB, Tidak Bisa Tambah Data'); window.location='pajak.php'</script>";
} else {
    $query = "INSERT INTO tentang_pajak (judul_pajak) VALUES ('$judul_pajak')";
}

$hasil = mysqli_query($koneksi, $query);

    if($hasil) {
        echo "<script> alert('Proses tambah pajak berhasil'); window.location='pajak.php';</script>";
    } else {
        echo "<script> alert('Proses tambah pajak gagal'); history.back();</script>";
    }
    
?>