<?php
include_once "connection.php";
$sql ="SELECT * FROM user";
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
    <title>Danh sách user</title>
</head>
<body>
    <div><?php echo $GET_['thongbao'] ?? '' ?></div>
    <table border="1">
       <tr>
        <th>Mã User</th>
        <th>Tên User</th>
        <th>Acc count</th>
        <th>Passwork</th>
        <th>Email</th>
        <th><a href="themuser.php">Thêm User</a></th>
       </tr>
       <?php foreach ($result as $user) : ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['acc_count'] ?></td>
            <td><?php echo $user['passwork'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td>
                <a href="suauser.php?mauser=<?=$user['id']?>">Sửa</a>
                <a onclick="return confirm('Bạn chắc chắn muốn xoá không?')" href="xoauser.php?mauser=<?=$user['id']?>">Xoá</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>