<?php
include_once "connection.php";
    $madm = $_GET['madm'];
    $sql = "DELETE FROM category WHERE id_category = $madm";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        $thongbao = "Xoá thành công";
    } else {
        $thongbao = "Xoá thất bại";
    }


header("Location: listDanhmuc.php?thongbao=" . urlencode($thongbao));
exit();
?>
