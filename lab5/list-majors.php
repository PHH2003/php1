<?php
include_once "connection.php";
$sql ="SELECT * FROM majors";
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
    <title>List Majors</title>
</head>
<body>
    <div><?php echo $GET_['thongbao'] ?? '' ?></div>
    <table border="1">
       <tr>
        <th>id</th>
        <th>Tên chuyên ngành</th>
        <th><a href="add-majors.php">Thêm chuyên ngành</a></th>
       </tr>
       <?php foreach ($result as $cn) : ?>
        <tr>
            <td><?php echo $cn['id'] ?></td>
            <td><?php echo $cn['majors_name'] ?></td>
            <td>
                <a href="update-majors.php?macn=<?=$cn['id']?>">Sửa</a>
                <a onclick="return confirm('Bạn chắc chắn muốn xoá không?')" href="delete-majors.php?macn=<?=$cn['id']?>">Xoá</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <a href="list-profile.php">Profile</a>
</body>
</html>