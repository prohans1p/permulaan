<?php
include 'index.php';
$username = $_POST['username'];
$pesan = $_POST['pesan'];
$sql = "INSERT INTO tb_data (username, pesan) values ('$username', '$pesan')";
if ($conn->query($sql) === TRUE){
    echo "<script>
    alert('komentar berhasil ditambahkan')"
}
?>