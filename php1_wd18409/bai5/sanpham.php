<?php
require_once "connection.php";
$sql = "SELECT sp.*, tendm FROM sanpham sp JOIN danhmuc dm ON sp.madm=dm.madm";

$stmt = $conn->prepare($sql);

$stmt->execute();

$sanpham = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>

<body>
    <h2>Danh sách sản phẩm</h2>
    <table border="1">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình</th>
            <th>Tên danh mục</th>
            <th>
                <a href="themsp.php">Thêm mới</a>
            </th>
        </tr>

        <?php foreach ($sanpham as $sp) : ?>
            <tr>
                <td><?= $sp['masp'] ?></td>
                <td><?= $sp['tensp'] ?></td>
                <td><?= $sp['gia'] ?></td>
                <td>
                    <img src="images/<?= $sp['hinhanh'] ?>" width="110" alt="">
                </td>
                <td><?= $sp['tendm'] ?></td>
                <td>
                    sửa / xóa
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>