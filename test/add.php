<?php
    include_once "connection.php";
    if(!isset($_COOKIE['username'])){   
        header("Location: login.php");
        die;
    }
    // lấy dữ liệu của bảng airlines
    $sql = "SELECT * FROM airlines";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $airlines = $stmt -> fetchAll();
    // tạo biến erorrs
    $errors =[];
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $flight_number = $_POST['flight_number'];
        $file = $_FILES['image'];
        // tạo đường dẫn 
        $path = "images/";
        $total_passengers = $_POST['total_passengers'];
        $description = $_POST['description'];
        $airline_id = $_POST['airline_id'];
        // validate
        if(empty($flight_number)){
            $errors['flight_number']="Không được để trống";
        }
        if($file['size']<=0){
            $errors['image']="Không được để trống";

        }
        if(empty($total_passengers) || $total_passengers<=0){
            $errors['total_passengers']="Số hành khách phải là số dương";

        }
        if(empty($description)){
            $errors['description']="Không được để trống";
        }
        // Nếu không có lỗi
        if(empty($errors)){
            $file_name = $file['name'];
            $imgPath = $path .$file_name;
            move_uploaded_file($file['tmp_name'], $imgPath);
            $sql = "INSERT INTO flights(flight_number, image, total_passengers, description, airline_id) VALUE ($flight_number, '$imgPath', $total_passengers, '$description', $airline_id)";
            $stmt = $conn -> prepare($sql);
            
            if($stmt -> execute()){
                header("Location: index.php");
                die;
            }
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        flight_number: 
        <input type="number" name="flight_number">
        <span style="color: red;"><?=$errors['flight_number'] ?? ''?></span>
        <br>
        image:
        <input type="file" name="image" id="">
        <span style="color: red;"><?=$errors['image'] ?? '' ?></span>
        <br>
        total_passengers: 
        <input type="number" name="total_passengers">
        <span style="color: red;"><?=$errors['total_passengers'] ?? '' ?></span>
        <br>
        description: 
        <input type="text" name="description">
        <span style="color: red;"><?=$errors['description'] ?? '' ?></span>
        <br>
        airline:
        <select name="airline_id" id="">
            <?php foreach($airlines as $airline) : ?>
                <option value="<?=$airline['airline_id']?>">
                    <?=$airline['airline_name']?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>