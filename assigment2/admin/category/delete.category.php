<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../client/login.php');
}
include_once "../../connection.php";
    $id_category = $_GET['id'];
    $sql = "DELETE FROM category WHERE id_category = $id_category";
    $stmt = $conn->prepare($sql);
    $tb = $stmt->execute();
    
        if ($tb) {
            $thongbao = "Xoá category thành công";
        } else {
            $thongbao = "Xoá category thất bại";
        } 
    header("Location: list.category.php?thongbao=" . urlencode($thongbao));
    exit();
?>