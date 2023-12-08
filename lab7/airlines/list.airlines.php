<?php
    include_once "../connectiton.php";
    $sql = "SELECT * FROM airlines";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List airlines</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>id_airlines</th>
            <th>name_airlines</th>
            <th><a href="add.airlines.php">add airlines</a></th>
        </tr>
        <?php foreach($result as $airlines) : ?>
            <tr>
                <td><?php echo $airlines['airline_id'] ?></td>
                <td><?php echo $airlines['airline_name'] ?></td>
                <td>
                    <a href="edit.airlines.php?id=<?= $airlines['airline_id'] ?>">Sửa</a>
                    <a onclick="return confirm('Bạn chắc chắn muốn xoá?') " href="delete.airlines.php?id=<?= $airlines['airline_id'] ?>">Xoá</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>