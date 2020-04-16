<?php
include 'konek.php';

$username = $_POST ['username'];
$password = $_POST ['password'];

$koneksi->query("insert into resto (username,password) values ('$username','$password')");
header ("location:CRUD.php");
?>