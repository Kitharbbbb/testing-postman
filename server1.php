<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour";

$conn = mysqli_connect($servername, $username, $password, $dbname);
    //ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("connection " . mysqli_connect_error());
} 
?>