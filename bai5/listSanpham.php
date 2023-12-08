<?php
include_once "connection.php";
$sql ="SELECT * FROM product LEFT JOIN category ON product.id_product = category.id_category";
// $sql ="SELECT sp.*, name_product FROM product sp JOIN category dm ON sp.id_category=dm.id_category";
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
    <title>Danh sách san pham</title>
</head>
<body>
    <div><?php echo $GET_['thongbao'] ?? '' ?></div>
    <h2>Danh sách sản phẩm</h2>
    <table border="1">
       <tr>
        <th>Mã sản phẩm</th>
        <th>Tên Danh Mục</th>
        <th>Giá</th>
        <th>Hình ảnh</th>
        <th>Mã danh mục</th>
        <th><a href="themsp.php">Thêm sản phẩm</a></th>
       </tr>
       <?php foreach ($result as $sp) : ?>
        <tr>
            <td><?php echo $sp['id_product'] ?></td>
            <td><?php echo $sp['name_product'] ?></td>
            <td><?php echo $sp['price'] ?></td>
            <td>
                <img src="img/<?=$sp['image']?>" width='110' alt="">
            </td>
            <td><?php echo $sp['name_category'] ?></td>
            <td>
                <a href="suasp.php?masp=<?=$dm['id_product']?>">Sửa</a>
                <a onclick="return confirm('Bạn chắc chắn muốn xoá không?')" href="xoasp.php?masp=<?=$dm['id_product']?>">Xoá</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>