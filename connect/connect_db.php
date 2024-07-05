<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "giadauhlk";

$conn = mysqli_connect($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Kết nối Database không thành công: ". $conn->connect_error);
}   
echo "Kết nối thành công!!"
?>