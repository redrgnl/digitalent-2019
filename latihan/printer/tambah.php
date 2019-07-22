<?php
include 'connection.php';

$merk = $_POST['merk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

$query = "INSERT INTO printer (no, nama_merk, warna, jumlah) VALUES (DEFAULT, '$merk', '$warna', '$jumlah')";
$result = mysqli_query($mysqli, $query);

header("location: index.html");
?>