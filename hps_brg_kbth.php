<?php

 
 // include database connection file
 include_once("koneksi.php");
  
 // Get id from URL to delete that user
 $id_kbth = $_GET['id_kbth'];
  
 // Delete user row from table based on given id
 $result = mysqli_query($conn, "DELETE FROM brg_kbth_ayam WHERE id_kbth=$id_kbth");
  
 // After delete redirect to Home, so that latest user list will be displayed.
 header("Location:brg_kbth_aym.php");
 ?>

