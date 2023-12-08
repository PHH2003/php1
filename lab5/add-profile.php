<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Lấy tên DM từ form
        $fullname = $_POST['fullname'];
        // $avatar = $_POST['avatar']; 
        $avatar = $_FILES['avatar'];
        $file_name = $avatar['name'];
        // upload anh
        move_uploaded_file($avatar['tmp_name'], "images/".$file_name);    $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $hobbies = $_POST['hobbies'];
        $skill = $_POST['skill'];
        $majors = $_POST['majors_id'];
        $sql ="INSERT INTO profile(fullname, avatar, birthday, email, address, hobbies, skill, majors_id) VALUE ('$fullname','$file_name', '$birthday', '$email','$address','$hobbies', '$skill', $majors)";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        // Thực thi câu lệnh
        $stmt->execute();
        // Quay lại trang danh sách
        header("location: list-profile.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-profile</title>
</head>
<body>
    <h2>Thêm profile</h2>
    <form action="" method="post" enctype="multipart/form-data">
        fullname
        <input type="text" name='fullname'>
        <br>
        avatar   
        <input type="file" name="avatar">
       
        <br>
        birthday
        <input type="text" name='birthday'>
        <br>
        email
        <input type="text" name='email'>
        <br>
        address
        <input type="text" name='address'>
        <br>
        hobbies
        <input type="text" name='hobbies'>
        <br>
        skill
        <input type="text" name='skill'>
        <br>
        majors
        <select name="majors_id">
        <?php
            $majorsSql = "SELECT * FROM majors";
            $stmt = $conn->prepare($majorsSql);
            $stmt->execute();
            $result = $stmt->fetchAll();
       
            foreach ($result as $major) {
                $selected = ($major['id'] == $profile['majors_id']) ? 'selected' : '';
                echo "<option value='{$major['id']}' {$selected}>{$major['majors_name']}</option>";
            }
        ?>
    </select>
        <br>
        <button type='submit'>Thêm</button>
        <a href="list-profile.php">Quay lại danh sách</a>
    </form>
</body>
</html>