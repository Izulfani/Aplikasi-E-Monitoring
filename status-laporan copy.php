
<!doctype html>
<html lang="en">
  <head>
  	<title>E-MoniWP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="assets/css/css10/main.css" rel="stylesheet" />
    
	<link rel="stylesheet" href="assets/css/css7/style.css">
    <link rel="icon" href="images/pky.jpg">
	</head>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="">BPPRD KOTA PALANGKA RAYA </a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="monitoring.php">Home</a></li>
              
              
              <!-- <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="admin/index.php">Login Admin</a></li> -->
                  <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li> -->
             
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
	<body>
		
	<section class="ftco-section">
		<div class="container">
		<div class="form-group mt-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <form action="" method="get">
            <!-- <label for="cari"> Cari Objek -->
            <input type="text" name="keyword" size="25" autocomplete="off" autofocus placeholder="Cari Objek Pajak Anda">
            <input class="btn btn-success" type="submit" name="cari" value="Cari">
          </form>
        </div>
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-6">
					<h2 class="heading-section">Status Kendala</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php 
                        include "config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM kendala");
                        ?>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>No</th>
					        <th>Nama Pelapor</th>
					        <th>Alamat Objek</th>
					        <th>Nama Objek</th>
					        <th>Tanggal Lapor</th>
					        <th>Kendala</th>
							<th>Status</th>
					      </tr>
					    </thead>
					    <tbody>
							<?php
							$no = 1;
							include "config/koneksi.php";
							$no = 1;
							$sql = mysqli_query($koneksi,"SELECT* FROM kendala");
							if(isset(($_GET)['cari'])){
								$sql = mysqli_query($koneksi,"SELECT * FROM kendala WHERE 
										id_dataobjek LIKE '%".$_GET['keyword']."%' OR
										nama_pelapor LIKE '%".$_GET['keyword']."%'OR
										nama_dataobjek LIKE '%".$_GET['keyword']."%'OR
										tanggal_lapor LIKE '%".$_GET['keyword']."%'OR
										alamat_objek LIKE '%".$_GET['keyword']."%' OR
										kendala LIKE '%".$_GET['keyword']."%' OR
										
										status LIKE '%".$_GET['keyword']."%'
										");
							}
							while($row = mysqli_fetch_array($sql)){
							?>
										<tr>
											<td><?php echo $no++; ?></td>
											
											<td><?php echo $row['nama_pelapor']; ?></td>
											<td><?php echo $row['alamat_objek']; ?></td>
											<td><?php echo $row['nama_dataobjek']; ?></td>
											<td><?php echo $row['tanggal_lapor']; ?></td>
											
											<td><?php echo $row['kendala']; ?></td>
										  
										   
											</td>
											<td><?php echo $row['status']; ?></td>
											<td>
											
											</td>
										</tr>
							<?php } ?>         
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>
<?php include"footer.php";?>
