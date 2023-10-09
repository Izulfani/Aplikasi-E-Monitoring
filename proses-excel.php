<?php 
include '../config/koneksi.php';
include "excel_reader.php";
$target = basename($_FILES['berkas_excel']['name']) ;
move_uploaded_file($_FILES['berkas_excel']['tmp_name'], $target);
chmod($_FILES['berkas_excel']['name'],0777);
$data = new Spreadsheet_Excel_Reader($_FILES['berkas_excel']['name'],false);
$jumlah_baris = $data->rowcount($sheet_index=0);
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$user     = $data->val($i, 1);
	$nama_objek   = $data->val($i, 2);
	$npwpd  = $data->val($i, 3);
	$alamat  = $data->val($i, 4);
	$pemasangan  = $data->val($i, 5);

	if($user != "" && $nama_objek != "" && $npwpd != "" && $alamat != "" && $pemasangan !=""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into data_objek values('','$user','$nama_objek','$npwpd','$alamat','$pemasangan')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['berkas_excel']['name']);

// alihkan halaman ke index.php
header("location:data-objek.php?pesan=berhasil import");
?>