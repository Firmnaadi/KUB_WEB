<?php
$connect = new mysqli("localhost", "wstifbi4_ternak-ayam", "Polije1234", "wstifbi4_ternak-ayam");
$queryResult=$connect->query("SELECT * FROM brg_ayam");
$result=array();
while($fetchData=$queryResult->fetch_assoc()){
    $result[]=$fetchData;
}
echo json_encode($result);
?>