<?php
$connect = new mysqli("localhost", "wstifbi4_ternak-ayam", "Polije1234", "wstifbi4_ternak-ayam");
$id_telur=$_POST['id_telur'];
$gread=$_POST['gread'];
$berat_telur=$_POST['berat_telur'];
$connect->query("UPDATE brg_telur SET gread='".$gread."', berat_telur='".$berat_telur."' WHERE id_telur=". $id_telur);
// $db = mysqli_connect('localhost','root','','kub');
// if(!$db)
// {
// 	echo "Database connection failed";
// }

// $id_telur = $_POST['id_telur'];
// $gread = $_POST['gread'];
// $berat_telur=$_POST['berat_telur'];

// $edit = "UPDATE brg_telur SET gread ='$gread', berat_telur='$berat_telur' WHERE id_telur='$id_telur'";
// $query = mysqli_query($db,$edit);
// if($query){
//     echo json_encode("Sukses");
// }
// $connect = new mysqli("localhost", "root", "", "kub");
// $id_telur=isset($_POST['id_telur']);
// $gread=isset($_POST['gread']);
// $berat_telur=isset($_POST['berat_telur']);
// $connect->query("UPDATE brg_telur SET gread='".$gread."', berat_telur='".$berat_telur."' WHERE id_telur=".$id_telur);
if ($connect) {
    echo json_encode("Sukses");
} else {
    echo json_encode("Gagal");
}
?>