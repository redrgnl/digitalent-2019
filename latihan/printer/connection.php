<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'digitalent';

$mysqli = mysqli_connect($localhost, $username, $password, $database);

if(!$mysqli){
    die("Udah nungguin lama eh malah sama yang lain". mysqli_connect_error());
}
?>