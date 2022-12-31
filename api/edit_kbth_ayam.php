<?php
$connect = new mysqli("localhost", "wstifbi4_ternak-ayam", "Polije1234", "wstifbi4_ternak-ayam");
$id_kbth=$_POST['id_kbth'];
$nama_kbth=$_POST['nama_kbth'];
$jumlah_kbth=$_POST['jumlah_kbth'];
$connect->query("UPDATE brg_kbth_ayam SET nama_kbth='".$nama_kbth."', jumlah_kbth='".$jumlah_kbth."' WHERE id_kbth=". $id_kbth);
if ($connect) {
    echo json_encode("Sukses");
} else {
    echo json_encode("Gagal");
}
?>