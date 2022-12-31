<?php

$connect = new mysqli("localhost", "wstifbi4_ternak-ayam", "Polije1234", "wstifbi4_ternak-ayam");
$email = $_POST['email'];
$password = $_POST['password'];
$data = array();
$queryResult=mysqli_query($connect, "SELECT * FROM detail_akun WHERE email='".$email."' and password='".$password."'");
while($rowdata = mysqli_fetch_array($queryResult)){
    $data[]=$rowdata;
}
echo json_encode($data);

?>