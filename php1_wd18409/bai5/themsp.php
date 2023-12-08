<?php
require_once "connection.php";

//Lấy dữ liệu từ form
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $madm = $_POST['madm'];

    $file = $_FILES['hinhanh'];
    //Lấy ra tên ảnh
    $hinhanh = $file['name'];
    //Upload ảnh
    move_uploaded_file($file['tmp_name'], "images/" . $hinhanh);

    //1. Viết câu lệnh SQL INSERT
    $sql = "INSERT INTO sanpham(tensp, gia, hinhanh, madm) VALUES('$tensp', '$gia', '$hinhanh', '$madm')";
    //2. Chuẩn bị
    $stmt = $conn->prepare($sql);
    //3. Thực thi
    $stmt->execute();
    //thông báo
    $thongbao = "Thêm dữ liệu thành công";
    //Chuyển sang trang danh sách sanpham
    header("location: sanpham.php?thongbao=$thongbao");
    die;
}

//lấy toàn bộ dữ liệu của bảng danh mục
$sql = "SELECT * FROM danhmuc";
$stmt = $conn->prepare($sql);
$stmt->execute();
$danhmuc = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <h2>Thêm sản phẩm</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Tên sản phẩm
        <input type="text" name="tensp" id="">
        <br>
        Giá <input type="number" name="gia" id="">
        <br>
        Hinh ảnh
        <input type="file" name="hinhanh" id="">
        <br>
        <select name="madm" id="">
            <option value="0" selected disabled>Chọn danh mục</option>
            <?php foreach ($danhmuc as $dm) : ?>
                <option value="<?= $dm['madm'] ?>">
                    <?= $dm['tendm'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Thêm mới</button>
    </form>
</body>

</html>