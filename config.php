<?php 

$server = "remotemysql.com";
$user = "HRM8yK2RUy";
$pass = "Fz4LObMf7R";
$database = "HRM8yK2RUy";
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
