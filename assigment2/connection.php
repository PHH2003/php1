<?php
//File này dùng để kết nối đến CSDL
$host = "127.0.0.1";//hoặc có thể thay bằng localhost
$username="root";
$password="";
$dbname="asm2";
try {
//Câu lệnh kết nối
$conn= new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
//Set thuộc tính cho kết nối
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo"Lỗi kết nối cơ sở dữ liệu: ".$e->getMessage();
}