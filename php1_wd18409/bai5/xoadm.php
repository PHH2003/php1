<?php
require_once "connection.php";

//Lấy madm trên URL
$madm = $_GET['madm'];
//SQL
$sql = "DELETE FROM danhmuc WHERE madm=$madm";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
$stmt->execute();

$thongbao = "Xóa dữ liệu thành công";
header("location: listDanhmuc.php?thongbao=$thongbao");
die; //exit();