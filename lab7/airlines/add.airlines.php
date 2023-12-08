<?php
    include_once "../connectiton.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST['airlines_name'])) {
            echo "Không để trống";
        } else {
            $airlines_name = $_POST['airlines_name'];
            $sql = "INSERT INTO airlines(airline_name) VALUES ('$airlines_name')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            header("location: list.airlines.php");
            die;
        }
    }

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
        <input type="text" name='airlines_name'>
        <br>
        <button type='submit'>Thêm</button>
        <a href="list.airlines.php">Quay lại danh sách</a>
    </form>
</body>
</html>