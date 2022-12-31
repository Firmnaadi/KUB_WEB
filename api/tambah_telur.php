<?php
$conn=new mysqli("localhost", "wstifbi4_ternak-ayam", "Polije1234", "wstifbi4_ternak-ayam");
$id_telur = $_POST['id_telur'];
$tanggal =  date('Y-m-d');
$berat = $_POST['berat'];
$conn ->query("INSERT INTO pendapatan_telur(id_telur, tanggal, berat) VALUES( '$id_telur', '$tanggal', '$berat')");
if ($conn) {
    echo json_encode("Sukses");
} else {
    echo json_encode("Gagal");
    }
?>