<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Lấy tên DM từ form
        $tencn = $_POST['tencn'];
        $macn = $_POST['macn'];
        $sql ="UPDATE majors SET majors_name= '$tencn' WHERE id=$macn";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi câu lệnh
        $stmt->execute();
        // Quay lại trang danh sách
        header("location: list-majors.php");
        die;
    }
    //Lấy mã dm trên sql
    $macn = $_GET["macn"];
    // SQL
    $sql = "SELECT * FROM majors WHERE id=$macn";
    // chuẩn bị
    $stmt = $conn->prepare($sql);
    // Thực thi
    $stmt->execute();
    // lấy 1 dòng dữ liệu
    $majors = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Majors</title>
</head>
<body>
    <h2>Thêm chuyên ngành</h2>
    <form action="" method="post">
        Tên chuyên ngành
        <input type="text" name='tencn' value = '<?= $majors['majors_name'] ?>'>
        <br>
        <!-- Đổ dữ liệu mã danh mục vào thẻ hidden -->
        <input type="hidden" name='macn' value = '<?= $majors['id'] ?>' >
        <button type='submit'>Sửa</button>
        <a href="list-majors.php">Quay lại danh sách</a>
    </form>
</body>
</html>