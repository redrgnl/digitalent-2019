<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_siswa";

$mysqli = mysqli_connect($host,$user,$pass,$db);

if(!$mysqli){
    die("Udah nungguin lama eh malah sama yang lain". mysqli_connect_error());
} else {
    echo "Anda JODOH!";
}

?>