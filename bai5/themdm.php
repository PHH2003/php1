<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Lấy tên DM từ form
        $tendm = $_POST['tendm'];
        $sql ="INSERT INTO category(name_category) VALUE ('$tendm')";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi câu lệnh
        $stmt->execute();
        // Quay lại trang danh sách
        header("location: listDanhmuc.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm DM</title>
</head>
<body>
    <h2>Thêm danh mục</h2>
    <form action="" method="post">
        Tên danh mục
        <input type="text" name='tendm'>
        <br>
        <button type='submit'>Thêm</button>
        <a href="listDanhmuc.php">Quay lại danh sách</a>
    </form>
</body>
</html>