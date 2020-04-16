<?php
include 'konek.php';

$Nama = $_POST ['Nama'];
$Film = $_POST ['Film'];
$Ticket = $_POST ['Ticket'];

$koneksi->query("insert into sr (Nama,Film,Ticket) values ('$Nama','$Film','$Ticket')");
header ("location:buy3.php");
?>