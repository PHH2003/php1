<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Lấy tên DM từ form
        $tendm = $_POST['tendm'];
        $madm = $_POST['madm'];
        $sql ="UPDATE category SET name_category= '$tendm' WHERE id_category=$madm";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi câu lệnh
        $stmt->execute();
        // Quay lại trang danh sách
        header("location: listDanhmuc.php");
        die;
    }
    //Lấy mã dm trên sql
    $madm = $_GET["madm"];
    // SQL
    $sql = "SELECT * FROM category WHERE id_category=$madm";
    // chuẩn bị
    $stmt = $conn->prepare($sql);
    // Thực thi
    $stmt->execute();
    // lấy 1 dòng dữ liệu
    $dm = $stmt->fetch();
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
        <input type="text" name='tendm' value = '<?= $dm['name_category'] ?>'>
        <br>
        <!-- Đổ dữ liệu mã danh mục vào thẻ hidden -->
        <input type="hidden" name='madm' value = '<?= $dm['id_category'] ?>' >
        <button type='submit'>Sửa</button>
        <a href="listDanhmuc.php">Quay lại danh sách</a>
    </form>
</body>
</html>