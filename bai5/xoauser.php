<?php
include_once "connection.php";
    $mauser = $_GET['mauser'];
    $sql = "DELETE FROM user WHERE id = $mauser";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        $thongbao = "Xoá user thành công";
    } else {
        $thongbao = "Xoá user thất bại";
    }
header("Location: listUser.php?thongbao=" . urlencode($thongbao));
exit();
?>
