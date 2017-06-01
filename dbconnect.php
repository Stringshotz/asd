<?php

$server = "localhost";
$database = "ddbase";
$username = "stringdot";
$password = "Ninja123";

// conectarea la serverul MariaDB
$connect = mysqli_connect($server,$username,$password) or die( mysqli_error() );

// selecteaza baza de date ddbase
$db = mysqli_select_db($connect,$database) or die( mysqli_error($connect) );
?>