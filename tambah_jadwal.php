<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JADWAL</title>
</head>
<body>
<a href="jadwal.php">kembali</a>
    <br/><br/>
 
    <form action="tambah_jadwal.php" method="post" name="form1">
        <table width="25%" border="0">
        <tr> 
            <td>Tanggal</td>
        <td> 
                <td><input type="date" name="tanggal"></td></td>     
            </tr>
            <tr> 
            <td>Jam</td>
        <td> 
                <td><input type="time" name="jam"></td></td>     
            </tr>
            
            <tr> 
                <td>kegiatan</td>
                <td><input type="text" name="kegiatan"></td>
            <tr></tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
    <?php
 
if(isset($_POST['Submit'])) {
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $kegiatan = $_POST['kegiatan'];
    
    // include database connection file
    include_once("koneksi.php");
            
    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO jadwal VALUES(null,'$tanggal','$jam','$kegiatan')");
    
    // Show message when user added
    echo "<script type='text/javascript'>
    alert('Data Berhasil Dimasukan!');
   location.replace('jadwal.php');
   </script>";
    //"User added successfully. <a href='brg_telur.php'>View Users</a>";
}

?>

</body>
</html>