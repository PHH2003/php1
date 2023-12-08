<?php
require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Lấy tên danh mục từ form
    $tendm = $_POST['tendm'];
    //Câu lênh SQL INSERT
    $sql = "INSERT INTO danhmuc(tendm) VALUES('$tendm')";

    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi câu lệnh
    $stmt->execute();
    //Quay lại trang danh sách
    $thongbao = "Thêm dữ liệu thành công.";
    header("location: listDanhmuc.php?thongbao=$thongbao");
    //kết thúc
    die;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
</head>

<body>
    <h2>Thêm danh mục</h2>

    <form action="" method="post">
        Tên danh mục
        <input type="text" name="tendm" id="">
        <br>
        <button type="submit">Thêm</button>
        <a href="listDanhmuc.php">Danh sách</a>
    </form>
</body>

</html>