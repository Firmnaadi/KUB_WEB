<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{	
    $id_pembelian_kbth = $_POST['id_pembelian_kbth'];
    
    $harga=$_POST['harga'];
    $tanggal=$_POST['tanggal'];
    $jumlah= $_POST['jumlah'];
    $nama_kbth=$_POST['nama_kbth'];

        
    // update user data
    $hasil = mysqli_query($conn, "UPDATE pembelian_kbth_ayam SET harga='$harga',tanggal='$tanggal', jumlah='$jumlah' WHERE id_pembelian_kbth=$id_pembelian_kbth");
    $hasil = mysqli_query($conn, "UPDATE brg_kbth_ayam set nama_kbth='$nama_kbth where id_kbth=$id_kbth");
    // Redirect to homepage to display updated user in list
    header("Location: pembelian_kbth_ayam.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pembelian_kbth = $_GET['id_pembelian_kbth'];
 $id_kbth=$_GET['id_kbth'];
// Fetech user data based on id
$hasil = mysqli_query($conn, "SELECT * FROM pembelian_kbth_ayam WHERE id_pembelian_kbth=$id_pembelian_kbth");
$hasil = mysqli_query($conn, "SELECT * FROM brg_kbth_ayam WHERE id_kbth=$id_kbth");
while($data = mysqli_fetch_array($hasil)){
    $harga=$data['harga'];
    $tanggal=$data['tanggal'];
    $jumlah= $data['jumlah'];
    $nama_kbth=$data['nama_kbth'];
}
?>
<html>
<head>	
    <title>Edit Barang Telur</title>
</head>
 
<body>
    <a href="pembelian_kbth_ayam.php">kembali</a>
    <br/><br/>
    
    <form name="update_telur" method="post" action="edit_brg_telur.php">
        <table border="0">
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr>
            <td>nama kebutuhan</td>
                <td><input type="text" name="nama_kbth" value=<?php echo $nama_kbth;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_kbth" value=<?php echo $_GET['id_kbth'];?>></td>
                <td><input type="hidden" name="id_pembelian_kbth" value=<?php echo $_GET['id_pembelian_kbth'];?>></td>
                <td><input type="submit" name="submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
</body>
</html>