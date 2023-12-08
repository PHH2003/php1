<?php
include_once "connection.php";
    $macn = $_GET['macn'];
    $sql = "DELETE FROM majors WHERE id = $macn";
    try {
        $stmt = $conn->prepare($sql);
        $tb = $stmt->execute();
    
        if ($tb) {
            $thongbao = "Xoá user thành công";
        } else {
            $thongbao = "Xoá user thất bại";
        }
    } catch (PDOException $e) {
        $thongbao = "Lỗi: " . $e->getMessage();
    }
    
    header("Location: list-majors.php?thongbao=" . urlencode($thongbao));
    exit();
?>