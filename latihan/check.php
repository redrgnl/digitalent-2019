<?php
$nama = $_POST['nama'];

if ($nama == ""){
    header("location: belajarweb.php?nama=kosong");
} else {
    header("location: belajarweb.php?nama=".$nama);
}


?>