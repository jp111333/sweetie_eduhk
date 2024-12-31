<?php
$servername = "localhost"; // 通常MySQL服务器在本地时是localhost，也可能是具体的IP地址
$username = "root"; 
$password = "wsll1243";
$dbname = "moodle";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: ". $conn->connect_error);
}
echo "连接成功";
$conn->close();