 <!-- Main Sidebar Container -->
  
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <!-- Brand Logo -->
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/pky.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block">E-MoniWP</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="beranda.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
             Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin.php" class="nav-link ">
            <i class="nav-icon fas fa-users"></i>
              <p>
              Kelola Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="teknisi.php" class="nav-link ">
            <i class="nav-icon fas fa-users"></i>
              <p>
              Kelola Teknisi
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="pajak.php" class="nav-link ">
            <i class="nav-icon fas fa-users"></i>
              <p>
              Kelola Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data-objek.php" class="nav-link ">
            <i class=" nav-icon fas fa-address-book"></i>
           
              <p>
               Data Objek Pajak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kategori-kendala.php" class="nav-link ">
            <i class=" nav-icon fas fa-address-book"></i>
           <!-- //make echo, narik data dari admin setelah input kategori kendala -->
              <p>
               Kategori Kendala 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Kendala 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data-keluhan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kendala
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="grafik-kendala.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Kendala</p>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="data-keluhan.php" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Data Kendala
              </p>
            </a> -->
            <li class="nav-item has-treeview">
            <a href="data-perbaikan-kendala.php" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Data Perbaikan Kendala
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Feedback Pelayanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data-feedback.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Feedback 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="evaluasi-kendala.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Evaluasi Kendala</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="grafik-feedback.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Pelayanan</p>
                </a>
              </li>
           
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="logout.php" class="nav-link ">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Logout 
              </p>
            </a>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>