
<?php
include 'koneksi.php';
error_reporting(1);
session_start();

if (isset($_SESSION['nama'])) {
    header("location: dashboard.php");
}
if (isset($_POST['submit'])) {
    $fulllname = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];   
    // $level = 1;
    // $password = md5($_POST['password']);
    // $cpassword = md5($_POST['cpasswprd']);
    if ($password == $cpassword) {
        $sql = "SELECT * FROM detail_akun WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows == 0) {
           try {
            $sql = "INSERT INTO detail_akun(`email`, `password`, `fulllname`, `level`) VALUES ('$email','$password','$fulllname','1')";
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            $nama = "";
            $email = "";
            $_POST['pass'] = "";
            $_POST['cpassword'] = "";
            header("Location: login.php");
            new Exception("error");
           } catch (Exception $e) {
            echo $e->getMessage();
           }
            // if ($result) {
            //     echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            //     $nama = "";
            //     $email = "";
            //     $_POST['pass'] = "";
            //     $_POST['cpassword'] = "";
            //     header("Location: login.php");
            // } else {
            //     echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            // }
        } 
        else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
        // header("Location: login.php");
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
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

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="" method="POST">
                            <input type="hidden" value="1" name="id">
                                <div class="form-group">
                               
                                        <input type="text" class="form-control form-control-user" id="nama"
                                            placeholder="First Name" name="nama" require>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        placeholder="Email Address" name="email" require>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="password" name="password" require>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="cpassword" class="form-control form-control-user"
                                            id="cpassword" placeholder="Repeat Password" name="cpassword" require>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning btn-user btn-block" name="submit">
                                    Register Account
                                </button>
                                <hr>
                           
                            <div class="text-center">
                                <a class="small" href="index.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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

</body>

</html>