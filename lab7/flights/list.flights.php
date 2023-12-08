<?php
    include_once "../connectiton.php";
    $sql = "SELECT flights.*, airlines.airline_name FROM flights JOIN airlines ON flights.airline_id = airlines.airline_id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List flights</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>id_flights</th>
            <th>flights_number</th>
            <th>image</th>
            <th>total_passengers</th>
            <th>description</th>
            <th>airline_id</th>
            <th><a href="add.flights.php">add flights</a></th>
        </tr>
        <?php foreach($result as $flights) : ?>
            <tr>
                <td><?php echo $flights['flight_id'] ?></td>
                <td><?php echo $flights['flight_number'] ?></td>
                <td>
                    <img src="img/<?= $flights['image'] ?>" width=80 alt="">
                </td>
                <td><?php echo $flights['total_passengers'] ?></td>
                <td><?php echo $flights['description'] ?></td>
                <td><?php echo $flights['airline_name'] ?></td>
                <td>
                    <a href="edit.flights.php?id=<?= $flights['flight_id'] ?>">Sửa</a>
                    <a onclick="return confirm('Bạn chắc chắn muốn xoá?') " href="delete.flights.php?id=<?= $flights['flight_id'] ?>">Xoá</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>