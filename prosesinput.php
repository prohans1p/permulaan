<?php 
if (isset($_POST['pesan']))
    require_once("database.php");
    if(isset($_POST['pesan'])) {
        include 'index.php';
        $username = $_POST['username'];
        $pesan = $_POST['pesan'];
        $sql = "INSERT INTO inpudata (username, pesan) values ('$username', '$pesan')";
        if ($conn->query($sql) === TRUE){
            
        }
    }
?>
