<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Data Objek Pajak</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	
 
	<center>
		<h1>Export Data object Pajak</h1>
	</center>
    <?php 
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_objek");
                        ?>
    <table border="1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Objek Pajak</th>
                                        <th>NPWPD</th>
                                        <th>Alamat</th>
                                        <th>Periode Pemasangan</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
                                <tbody>
                        
                        <?php
                        $no = 1;
                        while($row = mysqli_fetch_array($sql)){
                        ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['nama_objek']; ?></td>
                                        <td><?php echo $row['npwpd']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><?php echo $row['pemasangan']; ?></td>
                                        <td><?php echo $row['user']; ?></td>
                                    </tr>
                        <?php } ?>         
                                </tbody>
                       
                            </table>

</body>
</html>