<?php

require('koneksi.php');
session_start();
$crud = new coba_oop();

if (isset($_POST["submit"])) {
  $data = $crud->showData("SELECT * FROM `detail_akun` WHERE email='" . $_POST["email"] . "'");

  if ($_POST["email"] == $data["email"] && $_POST["password"] == $data["password"]) {
    $_SESSION['id'] = $data["id"];
    $_SESSION['name'] = $data["fullname"];
    $_SESSION['level'] = $data["level"];
    echo ("<script>
    alert('Berhasil');
  </script>");
    header('Location: dashboard.php');
  } else {
    echo "user atau password salah!!";
  }
}
if (isset($_SESSION['id'])) {
  header('dashboard.php');
}
// if(isset($_POST['submit'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     if(!empty(trim($email)) && !empty(trim($password))){
//         $query = "SELECT * FROM detail_akun WHERE email='$email'";
//         $result = mysqli_query($conn,$query);
//          $num = mysqli_num_rows($result);

//         var_dump($result);

//         while ($row = mysqli_fetch_array($result)){
//             $id = $row['id'];
//             $userVal = $row['email'];
//             $passVal =$row['password'];
//             $userName = $row['fullname'];
//             $level = $row['level'];
//         }

//         if($num != 0){
//             if($userVal==$email && $passVal==$password){
//                 // header('Location: home.php?fullname='.urlencode($username));
//                 $_SESSION['id'] = $id;
//                 $_SESSION['name'] = $userName;
//                 $_SESSION['level'] = $level;
//                 header('Location: dashboard.php');

//             }else{
//                 $error = 'user atau password salah!!';
//                 header('Location: login.php');
//             }
//         }else{
//             $error = 'user tidak ditemukan!!';
//             header('Location: login.php');
//         }
//     }else{
//         $error = 'Data tidak boleh kosong!!';
//         echo $error;
//     }
// }

// require_once "koneksi.php";
// if ($user->login($_POST["email"], $_POST["password"])){
//   header("location: dashboard.php");
// }
// if(isset($_POST['kirim'])){
//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   if($user->login($email,$password)){
//     header("location: dashboard.php");
//   }else{
//     $error = $user->getLastError(); 
//   }
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <form action="" method="POST">
                                    <div class="form-outline mb-4">
              <label class="form-label" for="email">Email</label>
              <input type="text" id="email" class="form-control form-control-lg" name="email" />
            </div>
            <!--password-->
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" class="form-control form-control-lg" name="password" />
            </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type = "submit" class="btn btn-warning btn-user btn-block" name = "submit">login </button>
                                        <hr>
                                  
                                   
                                    <div class="text-center">
                                        <a class="small" href="register.php">PT Karya Usaha Baru</a>
                                    </div>
                                </div>
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