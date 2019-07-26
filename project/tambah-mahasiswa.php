<?php
include 'connection.php';

$nama = $_POST['InputNama'];
$alamat = $_POST['InputAlamat'];
$jenis = $_POST['InputJenisKelamin'];
$sekolah = $_POST['InputSekolah'];
$agama = $_POST['InputAgama'];

$query = "INSERT INTO data_siswa (id_siswa, nama, alamat, jenis_kelamin, sekolah_asal, id_agama) VALUES (DEFAULT, '$nama', '$alamat', '$jenis', '$sekolah', '$agama')";

$result = mysqli_query($mysqli, $query);
header("location: project-form.html");

?>