<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $name = $_POST['name'];
        $acc_count = $_POST['acc_count'];
        $passwork = $_POST['passwork'];
        $email = $_POST['email'];
        $sql ="INSERT INTO user(name,acc_count, passwork, email) VALUE ('$name','$acc_count', '$passwork', '$email')";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi câu lệnh
        $stmt->execute();
        // Quay lại trang danh sách
        header("location: listUser.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm User</title>
</head>
<body>
    <h2>Thêm User</h2>
    <form action="" method="post">
        Name:
        <input type="text" name='name'>
        Acc Count:
        <input type="text" name='acc_count'>
        Passwork:
        <input type="text" name='passwork'>
        Email:
        <input type="text" name='email'>
        <br>
        <button type='submit'>Thêm</button>
        <a href="listDanhmuc.php">Quay lại danh sách</a>
    </form>
</body>
</html>