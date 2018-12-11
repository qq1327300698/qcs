<?php
 session_start();//定义session，同一IP登录不累加
$servername = "193.112.37.253";
$username = "root";
$password = "sunhaiwei1998";
$dbname = "szzz_db";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 // 检测连接
if ($conn->connect_error) {
     die("连接失败: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
$ip = $_SERVER['REMOTE_ADDR'];
//$ip = "192";
$sql1 = "INSERT INTO countip (ip) VALUES('".$ip."')";
$result1=mysqli_query($conn, $sql1);
 //注释下面一行可以实现同一IP登录不累加效果，测试时可以打开
session_destroy();

echo ("ip".$ip);
 ?>
