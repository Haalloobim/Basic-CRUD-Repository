<?php

$server = "localhost";
$user = "root";
$pass = "";
$db_name = "dumpdata";

$db = mysqli_connect($server, $user, $pass, $db_name);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} 
?>