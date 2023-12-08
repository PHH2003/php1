<?php
include_once "connection.php";

//Khai báo câu lệnh SQL
$sql = "SELECT * FROM danhmuc";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi câu lệnh SQL
$stmt->execute();
//Lấy ra tất cả dữ liệu
$result = $stmt->fetchAll();

// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>

    <div>
        <?php echo $_GET['thongbao'] ?? '' ?>
    </div>
    <table border="1">
        <tr>
            <th>Mã Danh mục</th>
            <th>Tên danh mục</th>
            <th>
                <a href="themdm.php">Thêm danh mục</a>
            </th>
        </tr>
        <?php foreach ($result as $dm) : ?>
            <tr>
                <td><?php echo $dm['madm'] ?></td>
                <td><?php echo $dm['tendm'] ?></td>
                <td>
                    <a href="suadm.php?madm=<?= $dm['madm'] ?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="xoadm.php?madm=<?= $dm['madm'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>