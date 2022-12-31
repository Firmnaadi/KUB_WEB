<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{	
    $id_telur = $_POST['id_telur'];
    
    $berat=$_POST['berat_telur'];
    // $tanggal=$_POST['tanggal'];
    $gread=$_POST['gread'];
    
    $sql = "UPDATE brg_telur SET berat_telur='$berat',gread='$gread' WHERE id_telur=$id_telur";
    // update user data
    $hasil = mysqli_query($conn, $sql);
    
    // echo $sql;
    // Redirect to homepage to display updated user in list
    header("Location: brg_telur.php");
}

// Display selected user data based on id
// Getting id from url
    $id_telur = $_GET['id_telur'];
    
    // Fetech user data based on id
    $hasil = mysqli_query($conn, "SELECT * FROM brg_telur WHERE id_telur=$id_telur");
    
    while($data = mysqli_fetch_array($hasil))
    {
        $berat = $data['berat_telur'];
        $gread = $data['gread'];
        // $tanggal = $data['tanggal'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barang Ayam</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                    <div class="bg-black py-2 collapse-inner rounded">
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
                </nav>
                <!-- End of Topbar -->
                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <?php

                echo date('l, d-m-Y');

                echo "<br/>";

                ?>
                <form action="edit_brg_telur.php" method="POST" name="form1">
                    <div class="form-group">
                        <label for="" class="col-form-label">Gread</label>
                        <select type="text" class="form-control" name="gread" >
                        <option value="">- Pilih Jenis gread -</option>
                        <option value=" A">A</option>
                        <option value=" B">B</option>
                        <option value=" C">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Berat</label>
                        <input type="text" class="form-control" name="berat_telur" value="<?= $berat ?>">
                    </div>
                    <input type="hidden" name="id_telur" value=<?php echo $_GET['id_telur'];?>></input>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" name="submit">Update</button>
                    </div>
                </form>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
                                    
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-warning" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{	
    $id_telur = $_POST['id_telur'];
    
    $berat=$_POST['berat_telur'];
    // $tanggal=$_POST['tanggal'];
    $gread=$_POST['gread'];
        
    // update user data
    $hasil = mysqli_query($conn, "UPDATE brg_telur SET berat_telur='$berat',gread='$gread' WHERE id_telur=$id_telur");
    
    // Redirect to homepage to display updated user in list
    header("Location: brg_telur.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_telur = $_GET['id_telur'];
 
// Fetech user data based on id
$hasil = mysqli_query($conn, "SELECT * FROM brg_telur WHERE id_telur=$id_telur");
 
while($data = mysqli_fetch_array($hasil))
{
    $berat = $data['berat_telur'];
    $gread = $data['gread'];
    // $tanggal = $data['tanggal'];
}
?>
<html>
<head>	
    <title>Edit Barang Telur</title>
</head>
 
<body>
    <a href="brg_telur.php">kembali</a>
    <br/><br/>
    
    <form name="update_telur" method="post" action="edit_brg_telur.php">
        <table border="0">
            <tr> 
                <td>berat</td>
                <td><input type="text" name="berat_telur" value=<?php echo $berat;?>></td>
            </tr>
            <!-- <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr> -->
            <tr> 
                <td>gread</td>
                <select type="text" name="gread" value=<?php echo $grade;?>>
                <option value="">- Pilih Jenis gread -</option>
                <option value=" A">A</option>
                <option value=" B">B</option>
                <option value=" C">C</option>
                 </select>
            </tr>
            <tr>
                <td><input type="hidden" name="id_telur" value=<?php echo $_GET['id_telur'];?>></td>
                <td><input type="submit" name="submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
</body>
</html>