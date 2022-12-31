<?php

 
 // include database connection file
 include_once("koneksi.php");
  
 // Get id from URL to delete that user
 $id_pembelian_kbth = $_GET['id_pembelian_kbth'];
 
  
 // Delete user row from table based on given id
 $result = mysqli_query($conn, "DELETE FROM pembelian_kbth_ayam WHERE id_pembelian_kbth='$id_pembelian_kbth'");
  
 // After delete redirect to Home, so that latest user list will be displayed.
 header("Location:pembelian_kbth_ayam.php");
 ?>



