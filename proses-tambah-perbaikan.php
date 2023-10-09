<?php
// pemanggilan koneksi
include "config/koneksi.php";
include "assets/vendor/phpmailer/classes/class.phpmailer.php";
//deklarasi variabel

$nama_objek_pajak = $_POST['nama_objek'];
$status_perbaikan = $_POST['status_perbaikan'];


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

<h2>Laporan masuk</h2>

<table>
  <tr>
    <th>Nama Objek Pajak</th>
    <th>".$nama_objek_pajak. "</th>
  </tr>
  <tr>
    <td>Status Perbaikan</td>
    <td>".$status_perbaikan."</td>
  </tr>

</table>

</body>");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";



//query insert


$sql = mysqli_query($koneksi, "INSERT into perbaikan_kendala (nama_objek_pajak, status_perbaikan)
                                                VALUES 
                                                ('$nama_objek_pajak', '$status_perbaikan')");

    //fungsi logika
    if($sql){
        echo "<script> alert('Proses kirim status perbaikan kendala berhasil'); window.location='form-teknisi.php';</script>";
    }else{
        echo "<script> alert('Proses kirim perbaikan kendala gagal'); history.back();</script>";
    }


?>
