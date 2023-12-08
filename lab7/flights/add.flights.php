<?php
session_start();
if(!isset($_COOKIE['user'])){
    header('location: ../login.php');
}
    include_once "../connectiton.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST['flight_number']) || empty($_FILES['image']) || empty($_POST['total_passengers']) || empty($_POST['description'])) {
            echo "Không để trống";
        }else{
        $flight_number = $_POST['flight_number'];
        $image = $_FILES['image'];
        $file_name = $image['name'];
        move_uploaded_file($image['tmp_name'], "img/" .$file_name);
        $total_passengers = $_POST['total_passengers'];
        $description = $_POST['description'];
        $airline_id	 = $_POST['airline'];
        $sql = "INSERT INTO flights(flight_number,image,total_passengers, description, airline_id) VALUE ('$flight_number', '$file_name', '$total_passengers', '$description', '$airline_id')";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        header("location: list.flights.php");
        die;
        }
  
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add flight</title>
</head>
<body>
<h2>Add flight</h2>
    <form action="" method="post" enctype="multipart/form-data">
        flight_number
        <input type="text" name='flight_number'>
        image
        <input type="file" name='image'>
        total_passengers
        <input type="text" name='total_passengers'>
        description
        <input type="text" name='description'>
        airline_name
        <select name="airline">
                <?php
                $sql = "SELECT * FROM airlines";
                $stmt = $conn -> prepare($sql);
                $stmt -> execute();
                $result = $stmt -> fetchAll();
                foreach ($result as $airlines) {
                    $selected = ($airlines['airline_id'] == $flight['airline_id']) ? 'selected' : '';
                    echo "<option value=\"{$airlines['airline_id']}\" $selected>{$airlines['airline_name']}</option>";
                }
                ?>
            </select>
        <br>
        <button type='submit'>Thêm</button>
        <a href="list.flights.php">Quay lại danh sách</a>
    </form>
</body>
</html>