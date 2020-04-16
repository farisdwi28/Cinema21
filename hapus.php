<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus DATA</title>
</head>
<body>
<?php
include 'konek.php';

$id = $_GET ['id'];

$query = "DELETE FROM resto WHERE id = $id";
$data = $koneksi->query($query);
$d= mysqli_affected_rows($koneksi);
header ("Location:CRUD.php");
?>
</body>
</html>