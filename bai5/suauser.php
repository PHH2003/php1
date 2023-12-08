<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $acc_count = $_POST['acc_count'];
        $passwork = $_POST['passwork'];
        $email = $_POST['email'];
        $mauser = $_POST['mauser'];
        $sql ="UPDATE user SET name = '$name', acc_count='$acc_count', passwork = '$passwork', email='$email' WHERE id=$mauser";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi câu lệnh
        $stmt->execute();
        // Quay lại trang danh sách
        header("location: listUser.php");
        die;
    }
     $mauser = $_GET['mauser'];
     $sql = "SELECT * FROM user WHERE id = $mauser";
     $stmt = $conn -> prepare($sql);
     $stmt -> execute();
     $user = $stmt -> fetch();
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
        <input type="text" name='name' value = '<?= $user['name'] ?>'>
        Acc Count:
        <input type="text" name='acc_count' value = '<?= $user['acc_count'] ?>'>
        Passwork:
        <input type="text" name='passwork' value = '<?= $user['passwork'] ?>'>
        Email:
        <input type="text" name='email' value = '<?= $user['email'] ?>'>
        <br>
        <input type="hidden" name='mauser' value = '<?= $user['id'] ?>' >
        <button type='submit'>Sửa</button>
        <a href="listUser.php">Quay lại danh sách</a>
    </form>
</body>
</html>