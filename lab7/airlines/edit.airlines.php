<?php
    include_once "../connectiton.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST['airlines_name'])) {
            echo "Không để trống";
        }
        else{
        $airlines_name = $_POST['airlines_name'];
        $airline_id = $_POST['airline_id'];
        $sql = "UPDATE airlines SET airline_name = '$airlines_name' WHERE airline_id = '$airline_id'";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        header("location: list.airlines.php");
        die;
        }
        
    }
    $airline_id = $_GET['id'];
    $sql = "SELECT * FROM airlines WHERE airline_id = $airline_id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $airlines = $stmt -> fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add airlines</title>
</head>
<body>
<h2>Thêm airlines</h2>
    <form action="" method="post">
        airlines_name
        <input type="text" name='airlines_name' value='<?= $airlines['airline_name']  ?>'>
        <br>
        <input type="hidden" name = 'airline_id' value='<?= $airlines['airline_id'] ?>'>
        <button type='submit'>Sửa</button>
        <a href="list.airlines.php">Quay lại danh sách</a>
    </form>
</body>
</html>