<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_anggota";

$mysqli = mysqli_connect($host, $username, $password, $database);

if (!$mysqli) {
    die("Cant Connect Database". mysqli_connect_error());
}

?>