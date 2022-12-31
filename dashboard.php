<?php 

require("koneksi.php");
session_start();

if(!isset($_SESSION['id'])&&
$_SESSION['level']!= 1){
    $_SESSION['msg']='anda harus login untuk mengakses halaman ini';
    header('Location: index.php');
}
require_once "koneksi.php";
// if(!$user->isLoggedIn()){
//     header("location: login.php");
// }
// $currentUser = $user->getUser();

// $sesID = $_SESSION['id'];
// $sesName = $_SESSION['name'];
// $sesLvl =$_SESSION['level'];

?>
<?php
$jumlah = mysqli_query($conn, "SELECT SUM(harga) as total FROM penjualan_ayam");
$jumlahtlr = mysqli_query($conn, "SELECT SUM(harga) as totaltlr FROM penjualan_telur");
$ayam = mysqli_query($conn, "SELECT SUM(jumlah_ayam) AS jumlahAYM FROM brg_ayam");
$telur = mysqli_query($conn,"SELECT SUM(berat_telur) AS jumtelur FROM brg_telur");
$penglur = mysqli_query($conn,"SELECT SUM(berat) AS pengtelur FROM penjualan_telur");
$pengyam = mysqli_query($conn, "SELECT SUM(jumlah) AS pengayam FROM penjualan_ayam");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PETERNAK AYAM - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div class="profile_img">	
				<span class="prfil-img"><img src="imG/ayam.jpEg" alt="" style="width: 70px"> </span>
                </div>
                <div class="sidebar-brand-text mx-3">PETERNAK AYAM <sup>Pt.kub</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Barang</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="brg_ayam.php">Ayam</a>
                        <a class="collapse-item" href="brg_telur.php">Telur</a>
                        <a class="collapse-item" href="brg_kbth_aym.php">Kebutuhan Ayam</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Penjualan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="penjualan_ayam.php">Ayam</a>
                        <a class="collapse-item" href="penjualan_telur.php">Telur</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pembelian</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="pembelian_ayam.php">Ayam</a>
                        <a class="collapse-item" href="pembelian_kbth_aym.php">Kebutuhan Ayam</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <!-- Divider -->
                        <hr class="sidebar-divider">

            <div class="sidebar-heading">
                <h6>Laporan</h6>
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Laporan"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Penjualan</span>
                </a>
                <div id="Laporan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="laporan_penjualan_ayam.php">Ayam</a>
                        <a class="collapse-item" href="laporan_penjualan_telur.php">Telur</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#LaporanPembelian"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pembelian</span>
                </a>
                <div id="LaporanPembelian" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="laporan_pembelian_ayam.php">Ayam</a>
                        <a class="collapse-item" href="laporan_pembelian_kbth_aym.php">Kebutuhan Ayam</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#LaporanPendapatan"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pendapatan</span>
                </a>
                <div id="LaporanPendapatan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="laporan_pendapatan_telur.php">Telur</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#LaporanPengeluaran"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pengeluaran</span>
                </a>
                <div id="LaporanPengeluaran" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="laporan_pengeluaran_ayam.php">Ayam</a>
                        <a class="collapse-item" href="laporan_pengeluaran_kbth_ayam.php">Kebutuhan Ayam</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Others"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Others</span>
                </a>
                <div id="Others" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-blue py-2 collapse-inner rounded">
                        <a class="collapse-item" href="data_karyawan.php">Data Karyawan</a>
                        <a class="collapse-item" href="jadwal.php">Jadwal</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">OWNER KUB</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                JADWAL</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 30/12/2022   </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                KEUANGAN</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <font color="green">penjualan ayam</font><br>
                                            <?php
                                          
                                            while($data = mysqli_fetch_array($jumlah)){
                                                
                                            $total =  $data['total'];
                                            //$total = $data['harga']* $data['jum'];
                                            }?>
                                            
                                            <th><?= $total; ?></th>
                                             <br>
                                             <font color="green">penjualan telur</font><br>
                                             <?php
                                          
                                          while($data = mysqli_fetch_array($jumlahtlr)){
                                              
                                          $totaltlr =  $data['totaltlr'];
                                          //$total = $data['harga']* $data['jum'];
                                          }?>
                                            <th><?= $totaltlr; ?></th>
                                             <br>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TELUR
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        
                                             
                                             <font color="48d1cc">Stok Telur</font>
                                                    <?php
                                          
                                          while($data = mysqli_fetch_array($telur)){
                                              
                                          $jumtelur =  $data['jumtelur'];
                                          //$total = $data['harga']* $data['jum'];
                                          }?>
                                          <th><?= $jumtelur; ?></th>
                                         
                                          <br>
                                             <font size = "3" color="48d1cc">Pengeluaran Telur</font><br>
                                         
                                         <?php
                                          
                                          while($data = mysqli_fetch_array($penglur)){
                                              
                                          $pengtelur =  $data['pengtelur'];
                                          //$total = $data['harga']* $data['jum'];
                                          }?>
                                          <th><?= $pengtelur; ?></th>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                AYAM</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                             <font color="orange">Ayam Tersedia</font>
                                            <?php
                                          
                                          while($data = mysqli_fetch_array($ayam)){
                                              
                                          $jumlahAYM =  $data['jumlahAYM'];
                                          //$total = $data['harga']* $data['jum'];
                                          }?>
                                          <th><?= $jumlahAYM; ?></th>
                                          <br>
                                             <font size = "2" color="orange">Pengeluaran Ayam</font><br>
                                         
                                          <?php
                                          
                                          while($data = mysqli_fetch_array($pengyam)){
                                              
                                          $pengayam =  $data['pengayam'];
                                          //$total = $data['harga']* $data['jum'];
                                          }?>
                                          <th><?= $pengayam; ?></th>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>WEBSITE &copy; Pt. KUB 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>