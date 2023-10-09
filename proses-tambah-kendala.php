<?php
// pemanggilan koneksi
include "config/koneksi.php";
include "assets/vendor/phpmailer/classes/class.phpmailer.php";
//deklarasi variabel
$id_dataobjek = $_POST['id_dataobjek'];
// $nama_pelapor = $_POST['nama_pelapor'];
$alamat = $_POST['alamat_objek'];
$nama_objek     = $_POST['nama_dataobjek'];
$tanggal_lapor     = $_POST['tanggal_lapor'];
$id_kategori    = $_POST['kategori'];
$kendala     = $_POST['kendala'];


$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "mail.dwifitrigona.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "noreply@dwifitrigona.com"; //user email
$mail->Password = "client2022okey"; //password email 
$mail->SetFrom("noreply@dwifitrigona.com","Nama pengirim"); //set email pengirim
$mail->Subject = "Noreply Pembaruan laporan"; //subyek email
$mail->AddAddress("bprdpalangkarayaa@gmail.com","nama email tujuan");  //tujuan email
$mail->AddAddress("myhammadzulfani@gmail.com","nama email tujuan");  //tujuan email
$mail->MsgHTML("<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Laporan Masuk</h2>

<table>
 
  <tr>
    <td>ALAMAT</td>
    <td>".$alamat."</td>
  </tr>
 
  <tr>
    <td>NAMA OBJEK PAJAK</td>
    <td>".$nama_objek."</td>
  </tr>
  <tr>
    <td>Tanggal Lapor</td>
    <td>".$tanggal_lapor."</td>
  </tr>
  <tr>
    <td>Deskripsi kendala</td>
    <td>".$kendala."</td>
  </tr>
</table>

</body>");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";

 {
$sql = mysqli_query($koneksi, "INSERT INTO `kendala` (`id_dataobjek`, `id_kategori`,  `alamat_objek`, `nama_dataobjek`, `tanggal_lapor`, `kendala`) VALUES ('$id_dataobjek','$id_kategori', '$alamat','$nama_objek','$tanggal_lapor','$kendala')");
}
    //fungsi logika
    if($sql){
        echo "<script> alert('Proses kirim kendala berhasil'); window.location='kendala1.php';</script>";
    }else{
        echo "<script> alert('Proses tambah kendala gagal'); history.back();</script>";
    }


?>
