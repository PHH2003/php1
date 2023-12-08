<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Lấy tên DM từ form
        $tencn = $_POST['tencn'];
        $sql ="INSERT INTO majors(majors_name) VALUE ('$tencn')";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi câu lệnh
        $stmt->execute();
        // Quay lại trang danh sách
        header("location: list-majors.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-majors</title>
</head>
<body>
    <h2>Thêm chuyên ngành</h2>
    <form action="" method="post">
        Tên chuyên ngành
        <input type="text" name='tencn'>
        <br>
        <button type='submit'>Thêm</button>
        <a href="list-majors.php">Quay lại danh sách</a>
    </form>
</body>
</html>