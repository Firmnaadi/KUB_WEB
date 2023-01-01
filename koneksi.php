<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kub";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else { echo "Berhasil";}

// try {
//     $con = new PDO('mysql : host = localhost; dbname=kub', 'root', '', array(PDO::ATTR_PERSISTENT => true));
// }catch (PDOException $e){
//     echo $e ->getMessage();
// }


class coba_oop
{
    private $oopservername = "localhost";
    private $oopusername = "root";
    private $ooppassword = "";
    private $ooppdbName = "kub";

    function dbConnect()
    {
        $conect = mysqli_connect($this->oopservername, $this->oopusername, $this->ooppassword, $this->ooppdbName);
        return $conect;
    }

    function execute($query)
    {
        return mysqli_query($this->dbConnect(), $query);
    }

    function showData($query)
    {
        $result = $this->execute($query);
        $datas = [];

        while($data = mysqli_fetch_assoc($result)){
            $datas = $data;
        }

        return $datas;
    }
}
