<?php

include "../config/koneksi.php";
$id_pajak          = $_POST['id_pajak'];
$judul_pajak      = $_POST['judul_pajak'];
$visi     = $_POST['visi'];
$misi     = $_POST['misi'];
$tentang_pajak        = $_POST['tentang_pajak'];
$lokasi_file       = $_FILES['foto_pajak']['tmp_name'];
$nama_file         = $_FILES['foto_pajak']['name'];
$ukuran_file       = $_FILES['foto_pajak']['size'];

if (empty($lokasi_file)){
    $query = "UPDATE tentang_bpprd SET judul_pajak = '$judul_pajak', isi_pajak = '$isi_pajak' WHERE id_pajak='$id_pajak'";
} elseif ($ukuran_file <= 2048000) {
    move_uploaded_file($lokasi_file, '../tentang_pajak/' . $nama_file);
    $query = "UPDATE tentang_bpprd set judul_pajak='$judul_pajak', visi='$visi', misi='$misi', tentang_pajak='$tentang_pajak', foto_pajak='$nama_file' WHERE id_pajak='$id_pajak'";
} elseif ($ukuran_file = 2048000) {
    echo "<script> alert('Ukuran Foto $nama_file Lebih Dari 2 MB, Tidak Bisa Tambah Data'); window.location='pajak.php'</script>";
} else {
    $query = "UPDATE tentang_pajak SET judul_pajak = '$judul_pajak' WHERE id_pajak='$id_pajak'";
}

$hasil = mysqli_query($koneksi,$query);

    if($hasil){
        echo "<script> alert('Proses edit pajak berhasil'); window.location='pajak.php';</script>";
    }else{
        echo "<script> alert('Proses edit pajak gagal'); history.back();</script>";
    }
    
?>