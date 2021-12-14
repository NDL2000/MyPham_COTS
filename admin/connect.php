<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mypham_cots";
$conn = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($conn, 'UTF8');

$database1 = "local";
$conn1 = mysqli_connect($hostname, $username, $password, $database1);
mysqli_set_charset($conn1, 'UTF8');
?>