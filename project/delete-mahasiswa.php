<?php
include 'connection.php';
$id = $_GET['id'];

$query = "DELETE FROM data_siswa WHERE id_siswa = '$id'";
$result = mysqli_query($mysqli, $query);

header("location: project-daftar.php");
?>