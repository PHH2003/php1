<?php
require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Lấy tên danh mục từ form
    $tendm = $_POST['tendm'];
    $madm = $_POST['madm'];
    //Câu lênh SQL UPDATE
    $sql = "UPDATE danhmuc SET tendm='$tendm' WHERE madm=$madm";

    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi câu lệnh
    $stmt->execute();

    $thongbao = "Cập nhật dữ liệu thành công.";
}

//Lấy mã danh mục trên URL
$madm = $_GET['madm'];
//1. SQL
$sql = "SELECT * FROM danhmuc WHERE madm=$madm";
//2. Chuẩn bị
$stmt = $conn->prepare($sql);
//3. Thực thi
$stmt->execute();
//4. Lấy 1 dòng dữ liệu
$dm = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa danh mục</title>
</head>

<body>
    <h2>Sửa danh mục</h2>
    <!-- Hiển thị thông báo khi cập nhật -->
    <h3>
        <?php echo $thongbao ?? '' ?>
    </h3>
    <form action="" method="post">
        Tên danh mục
        <input type="text" name="tendm" value="<?= $dm['tendm'] ?>">
        <br>
        <!-- Đổ dữ liệu mã danh mục vào thẻ hidden -->
        <input type="hidden" name="madm" value="<?= $dm['madm'] ?>">
        <button type="submit">Cập nhật</button>
        <a href="listDanhmuc.php">Danh sách</a>
    </form>
</body>

</html>