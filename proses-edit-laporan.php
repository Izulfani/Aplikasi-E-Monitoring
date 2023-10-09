<?php

include "../config/koneksi.php";

$id_dataobjek= $_POST['id_dataobjek'];
$id_lapor= $_POST['id_lapor'];
// $nama_pelapor= $_POST['nama_pelapor'];
$nama_dataobjek= $_POST['nama_dataobjek'];
$alamat_objek= $_POST['alamat_objek'];
$kendala = $_POST['kendala'];
$id_kategori = $_POST['id_kategori'];
$status = $_POST['status'];

$tanggal_lapor = $_POST['tanggal_lapor'];


$url = 'https://monitoring-br.herokuapp.com/chat/send?id=Zulfani';
$data = array('receiver' => '6282358616475', 'message' => '*Laporan Kendala terbaru*



Data Objek :'.$nama_dataobjek.'
Alamat Objek :'.$alamat_objek.'
Kategori Kendala :'.$id_kategori.'
Kendala :'.$kendala.'
Status :*'.$status.'*');

// $url = 'https://monitoring-br.herokuapp.com/chat/send?id=Zulfani';
// $data = array('receiver' => '6282354078458', 'message' => '*Laporan Kendala terbaru*


// Nama Pelapor :'.$nama_pelapor.'
// Data Objek :'.$nama_dataobjek.'
// Alamat Objek :'.$alamat_objek.'
// Kendala :'.$kendala.'
// Status :*'.$status.'*');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }


$input="UPDATE kendala set id_dataobjek='$id_dataobjek',nama_dataobjek = '$nama_dataobjek', alamat_objek= '$alamat_objek',id_kategori = '$id_kategori',  kendala= '$kendala', 
                          tanggal_lapor ='$tanggal_lapor',status = '$status'  where id_lapor='$id_lapor'";

$hasil = mysqli_query($koneksi, $input);
if ($hasil) {
    echo "<script> alert('Status Pelaporan Berhasil Di Input');
    window.location='data-keluhan.php'</script>";
} else {
    echo "<script> alert('Status  Pelaporan Gagal Di Input');
    window.location='data-keluhan.php'</script>";
}

?>