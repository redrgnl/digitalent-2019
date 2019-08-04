<?php 
include 'connection.php';

$id = $_POST['InputId'];
$nama = $_POST['InputNama'];
$alamat = $_POST['InputAlamat'];
$jenis = $_POST['InputJenisKelamin'];
$sekolah = $_POST['InputSekolah'];
$agama = $_POST['InputAgama'];

$query = "UPDATE data_siswa SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis', sekolah_asal = '$sekolah', id_agama = '$agama' WHERE id_siswa = '$id'";

$result = mysqli_query($mysqli, $query);

header ("location: project-daftar.php");
?>