<?php
include 'konek.php';
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query= "UPDATE resto SET username='$username', password='$password' WHERE id='$id'";

$data = $koneksi->query($query);
$d= mysqli_affected_rows($koneksi);

echo "<a href='CRUD.php'>Lihat Data</a?";
?>