<?php
$conn=new mysqli("localhost", "wstifbi4_ternak-ayam", "Polije1234", "wstifbi4_ternak-ayam");
$id_kbth = $_POST['id_kbth'];
// $tanggal =  $_POST['tanggal'];
$tanggal =  date('Y-m-d');
$jumlah = $_POST['jumlah'];
$conn ->query("INSERT INTO pengeluaran_kbth(id_kbth, tanggal, jumlah) VALUES( '$id_kbth', '$tanggal', '$jumlah')");
if ($conn) {
    echo json_encode("Sukses");
} else {
    echo json_encode("Gagal");
    }
?>