<?php

 
 // include database connection file
 include_once("koneksi.php");
  
 // Get id from URL to delete that user
 
 $id_ayam = $_GET['id_ayam'];

 // Delete user row from table based on given id
 $hasil = mysqli_query($conn, "DELETE FROM brg_ayam WHERE id_ayam='$id_ayam'");
  
 // After delete redirect to Home, so that latest user list will be displayed.
 header("Location: brg_telur.php");
 ?>




 

