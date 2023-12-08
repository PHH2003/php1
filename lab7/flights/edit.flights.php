<?php
    include_once "../connectiton.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST['flight_number']) || empty($_FILES['image']) || empty($_POST['total_passengers']) || empty($_POST['description'])) {
            echo "Không để trống";
        }else{
        $flight_number = $_POST['flight_number'];
        $image = $_FILES['image'];
        $file_name = $image['name'];
        if (!empty($file_name)) {
            move_uploaded_file($image['tmp_name'], "img/" .$file_name);
        } else {
            $file_name = $_POST['old_img'];
        };
        
        $total_passengers = $_POST['total_passengers'];
        $description = $_POST['description'];
        $airline_id	 = $_POST['airline'];
        $flight_id = $_POST['flight_id'];
        $sql = "UPDATE flights SET flight_number = '$flight_number', image = '$file_name', total_passengers='$total_passengers', description ='$description', airline_id='$airline_id'  WHERE flight_id = '$flight_id'";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        header("location: list.flights.php");
        die;
        }
        
    }
    $flight_id = $_GET['id'];
    $sql = "SELECT * FROM flights WHERE flight_id = $flight_id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $flight = $stmt -> fetch();
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
        <input type="text" name='flight_number' value='<?= $flight['flight_number'] ?>'>
        image
        <input type="file" name='image' value='<?= $flight['image'] ?>'>
        <input type="hidden" name='old_img' value = '<?= $flight['image'] ?>'>
        total_passengers
        <input type="text" name='total_passengers' value='<?= $flight['total_passengers'] ?>'>
        description
        <input type="text" name='description' value='<?= $flight['description'] ?>'>
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
        <input type="hidden" name ='flight_id' value='<?= $flight['flight_id'] ?>' >
        <button type='submit'>Sửa</button>
        <a href="list.flights.php">Quay lại danh sách</a>
    </form>
</body>
</html>