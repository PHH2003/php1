<?php
    include_once "connection.php";
    $sql="SELECT flights.*, airlines.airline_name FROM flights JOIN airlines ON flights.airline_id = airlines.airline_id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $flights = $stmt -> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php">Đăng nhập</a>
    <a href="logout.php">Đăng xuất</a>
    <table border=1>
        <tr>
            <th>flight_id</th>
            <th>flight_number</th>
            <th>image</th>
            <th>total_passengers</th>
            <th>description</th>
            <th>airline</th>
            <th>
                <a href="add.php">Thêm chuyến bay</a>
            </th>
        </tr>
        <?php foreach($flights as $flight) : ?>
            <tr>
                <td><?=$flight['flight_id']?></td>
                <td><?=$flight['flight_number']?></td>
                <td>
                    <img src="<?=$flight['image']?>" width="100" alt="">
                </td>
                <td><?=$flight['total_passengers']?></td>
                <td><?=$flight['description']?></td>
                <td><?=$flight['airline_name']?></td>
                <td>
                    <a href="edit.php?id=<?=$flight['flight_id']?>">Sửa</a>
                    <a onclick ="return confirm('Bạn có chắc muốn xoá?')" href="delete.php?id=<?=$flight['flight_id']?>">Xoá</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>