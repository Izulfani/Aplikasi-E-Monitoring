<?php
include "header.php";
include "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Halaman Grafik Kendala</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Laporan kendala perbulan
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                   <!-- Morris chart - Sales -->
                 
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
               
               
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

             <!-- BAR CHART -->
             <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Kategori Pertahun</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

           
            </div>         


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script>
   var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');
  <?php 
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT count(*) as jumlah_laporan,  DATE_FORMAT(tanggal_lapor, '%Y-%m') AS waktu FROM `kendala` group by tanggal_lapor");
                        $sql2 = mysqli_query($koneksi, "SELECT count(*) as jumlah_laporan,  DATE_FORMAT(tanggal_lapor, '%Y-%m') AS waktu FROM `kendala` group by tanggal_lapor");
                        ?>
  var salesChartData = {
   


    labels: [ <?php
                        while($row = mysqli_fetch_array($sql)){
                          echo "'".$row['waktu']."',";
                        
  }?>],
    datasets: [
      {
        label: 'Digital Goods',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [<?php
                        while($rowx = mysqli_fetch_array($sql2)){
                          echo "'".$rowx['jumlah_laporan']."',";
                        
  }?>]
      }
    
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  })

  <?php 
                        include "../config/koneksi.php";
                        $bar_up = mysqli_query($koneksi, "SELECT count(*) as jumlah_laporan, DATE_FORMAT(tanggal_lapor, '%Y') AS waktu FROM `kendala` group by DATE_FORMAT(tanggal_lapor, '%Y') ORDER BY `waktu` DESC");
                        $bar_middle = mysqli_query($koneksi, "SELECT id_kategori FROM `kendala` group by id_kategori");
                        ?>
  var areaChartData = {
      labels  : [<?php
                        while($bar = mysqli_fetch_array($bar_up)){
                          $wa = $bar['waktu'];
                          echo "'".$bar['waktu']."',";
                        
  }?>],
      datasets: [
        <?php
                        while($barx = mysqli_fetch_array($bar_middle)){
                          $ken = $barx['id_kategori']; ?>
        {
          label               : '<?php echo $ken; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php
                      $bar_down = mysqli_query($koneksi, "SELECT count(id_kategori) as jumlah_laporan,  DATE_FORMAT(tanggal_lapor, '%Y') AS waktu, id_kategori FROM `kendala` where id_kategori='$ken'  group by DATE_FORMAT(tanggal_lapor, '%Y') ORDER BY `waktu` DESC");
                        while($bar_d = mysqli_fetch_array($bar_down)){
                          echo "".$bar_d['jumlah_laporan'].",";
                        
  }?>]
        }, <?php } ?>
      ]
    }
  var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
   barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    <?php 
                        include "../config/koneksi.php";
                        $bar_up = mysqli_query($koneksi, "SELECT count(*) as jumlah_laporan,  DATE_FORMAT(tanggal_lapor, '%Y') AS waktu FROM `kendala` group by DATE_FORMAT(tanggal_lapor, '%Y') order by tanggal_lapor ASC");
                        $bar_middle = mysqli_query($koneksi, "SELECT id_kategori FROM `kendala` group by id_kategori");
                        ?>
  var areaChartData = {
      labels  : [<?php
                        while($bar = mysqli_fetch_array($bar_up)){
                          echo "'".$bar['waktu']."',";
                        
  }?>],
      datasets2: [
        <?php
                        while($barx = mysqli_fetch_array($bar_middle)){
                          $ken = $barx['id_kategori']; ?>
        {
          label               : '<?php echo $ken; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php
                      $bar_down = mysqli_query($koneksi, "SELECT count(id_kategori) as jumlah_laporan,  DATE_FORMAT(tanggal_lapor, '%Y') AS waktu, id_kategori FROM `kendala` where id_kategori='$ken' group by DATE_FORMAT(tanggal_lapor, '%Y') order by tanggal_lapor ASC");
                        while($bar_d = mysqli_fetch_array($bar_down)){
                          echo "".$bar_d['jumlah_laporan'].",";
                        
  }?>]
        }, <?php } ?>
      ]
    }
    var barChartCanvas2 = $('#barChart2').get(0).getContext('2d')
    var barChartData2 = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets2[0]
    barChartData.datasets2[1] = temp0

    var barChartOptions2 = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas2, {
      type: 'bar',
      data: barChartData2,
      options: barChartOptions2
    })

</script>
</body>
</html>
