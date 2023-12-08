<?php
include_once "connection.php";
$sql ="SELECT profile.*, majors.majors_name FROM profile  JOIN majors ON profile.majors_id = majors.id";
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
    <title>List Profile</title>
</head>
<body>
    <div><?php echo $GET_['thongbao'] ?? '' ?></div>
    <table border="1">
       <tr>
        <th>id</th>
        <th>fullname</th>
        <th>avatar</th>
        <th>birthday</th>
        <th>email</th>
        <th>address</th>
        <th>hobbies</th>
        <th>skill</th>
        <th>marjors</th>
        <th><a href="add-profile.php">Thêm profile</a></th>
       </tr>
       <?php foreach ($result as $profile) : ?>
        <tr>
            <td><?php echo $profile['id'] ?></td>
            <td><?php echo $profile['fullname'] ?></td>
            <td>
                <img src="images/<?=$profile['avatar']?>" width=100 alt="">
            </td>
            <td><?php echo $profile['birthday'] ?></td>
            <td><?php echo $profile['email'] ?></td>
            <td><?php echo $profile['address'] ?></td>
            <td><?php echo $profile['hobbies'] ?></td>
            <td><?php echo $profile['skill'] ?></td>
            <td><?php echo $profile['majors_name'] ?></td>
            <td>
                <a href="update-profile.php?idprf=<?=$profile['id']?>">Sửa</a>
                <a onclick="return confirm('Bạn chắc chắn muốn xoá không?')" href="delete-profile.php?idprf=<?=$profile['id']?>">Xoá</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <a href="list-majors.php">danh sách chuyên ngành</a>
</body>
</html>