<?php

 
 // include database connection file
 include_once("koneksi.php");
  
 // Get id from URL to delete that user
 $id_telur = $_GET['id_telur'];
 
  
 // Delete user row from table based on given id
 $result = mysqli_query($conn, "DELETE FROM brg_telur WHERE id_telur='$id_telur'");
  
 // After delete redirect to Home, so that latest user list will be displayed.
 header("Location:brg_telur.php");
 ?>




 

