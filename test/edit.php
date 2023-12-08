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
        $file_name = $file['name'];
        $imgPath = $path .$file_name;
        if(!empty($file_name)){
              move_uploaded_file($file['tmp_name'], $imgPath);
        }
        else{
            $imgPath = $_POST['old_image'];
        }
        
        $total_passengers = $_POST['total_passengers'];
        $description = $_POST['description'];
        $airline_id = $_POST['airline_id'];
        $flight_id = $_POST['flight_id'];
        // validate
        if(empty($flight_number)){
            $errors['flight_number']="Không được để trống";
        }
        if(empty($total_passengers) || $total_passengers<=0){
            $errors['total_passengers']="Số hành khách phải là số dương";

        }
        if(empty($description)){
            $errors['description']="Không được để trống";
        }
        // Nếu không có lỗi
        if(empty($errors)){
            $sql = "UPDATE flights SET flight_number = $flight_number, image='$imgPath', total_passengers = $total_passengers, description='$description', airline_id=$airline_id WHERE flight_id=$flight_id";
            $stmt = $conn -> prepare($sql);
            if($stmt -> execute()){
                header("Location: index.php");
                die;
            }
        }
    } 
    $flight_id = $_GET['id'];
    $sql="SELECT * FROM flights WHERE flight_id = $flight_id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $flight = $stmt -> fetch();
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
        <input type="number" name="flight_number" value="<?=$flight['flight_number']?>">
        <span style="color: red;"><?=$errors['flight_number'] ?? ''?></span>
        <br>
        image:
        <input type="file" name="image" id="" >
        <input type="hidden" name="old_image"  value="<?=$flight['image']?>">
        <span style="color: red;"><?=$errors['image'] ?? '' ?></span>
        <br>
        total_passengers: 
        <input type="number" name="total_passengers"  value="<?=$flight['total_passengers']?>">
        <span style="color: red;"><?=$errors['total_passengers'] ?? '' ?></span>
        <br>
        description: 
        <input type="text" name="description"  value="<?=$flight['description']?>">
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
        <input type="hidden" name="flight_id"  value="<?=$flight['flight_id']?>">
        <button type="submit">Sửa</button>
    </form>
</body>
</html>