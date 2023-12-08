<?php
include_once "connection.php";
$sql ="SELECT * FROM category";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi câu lệnh SQL
$stmt->execute();
//Lấy ra dữ liệu
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
    <div><?php echo $GET_['thongbao'] ?? '' ?></div>
    <table border="1">
       <tr>
        <th>Mã Danh Mục</th>
        <th>Tên Danh Mục</th>
        <th><a href="themdm.php">Thêm danh mục</a></th>
       </tr>
       <?php foreach ($result as $dm) : ?>
        <tr>
            <td><?php echo $dm['id_category'] ?></td>
            <td><?php echo $dm['name_category'] ?></td>
            <td>
                <a href="suadm.php?madm=<?=$dm['id_category']?>">Sửa</a>
                <a onclick="return confirm('Bạn chắc chắn muốn xoá không?')" href="xoadm.php?madm=<?=$dm['id_category']?>">Xoá</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>