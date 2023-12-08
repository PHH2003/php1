<?php
include_once "connection.php";
    $idprf = $_GET['idprf'];
    $sql = "DELETE FROM profile WHERE id = $idprf";
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
    
    header("Location: list-profile.php?thongbao=" . urlencode($thongbao));
    exit();
?>