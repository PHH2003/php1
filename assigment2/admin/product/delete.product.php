<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../client/login.php');
}
include_once '../../connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id_product = $id";
$stmt = $conn -> prepare($sql);
$tb = $stmt -> execute();

if($tb){
    echo $thongbao = "Xoa thanh cong";
}
else{
    echo $thongbao = "Xoa that bai";
}

header('Location: list.product.php?thongbao=' .urldecode($thongbao));
die;
?>