<?php
    include_once "connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['fullname'];
        $avatar = $_FILES['avatar'];
        $file_name = $avatar['name'];
        // move_uploaded_file($avatar['avatar']['tmp_name'], "images/".$file_name);
        if (!empty($file_name)) {
            move_uploaded_file($avatar['tmp_name'], "images/" . $file_name);
        } else {
            $file_name = $_POST['old_avatar'];
        }
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $hobbies = $_POST['hobbies'];
        $skill = $_POST['skill'];
        $majors = $_POST['majors_id'];
        $idprf = $_POST['idprf'];
        $sql ="UPDATE profile SET fullname= '$fullname', avatar ='$file_name', birthday = '$birthday', email='$email', address ='$address', hobbies ='$hobbies', skill = '$skill', majors_id='$majors' WHERE id=$idprf";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header("location: list-profile.php");
        die;
    }
    $idprf = $_GET["idprf"];
    $sql = "SELECT * FROM profile WHERE id=$idprf";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $profile = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Majors</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data" >
        fullname
        <input type="text" name='fullname' value = '<?= $profile['fullname'] ?>'>
        <br>
        avatar
        <input type="file" name='avatar'>
        <input type="hidden" name='old_avatar' value = '<?= $profile['avatar'] ?>' >
        <br>
        <?php echo $profile['avatar']; ?>
        birthday
        <input type="text" name='birthday' value = '<?= $profile['birthday'] ?>'>
        <br>
        email
        <input type="text" name='email' value = '<?= $profile['email'] ?>'>
        <br>
        address
        <input type="text" name='address' value = '<?= $profile['address'] ?>'>
        <br>
        hobbies
        <input type="text" name='hobbies' value = '<?= $profile['hobbies'] ?>'>
        <br>
        skill
        <input type="text" name='skill' value = '<?= $profile['skill'] ?>'>
        <br>
        majors
        <select name="majors_id">
        <?php
            $sql = "SELECT * FROM majors";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach ($result as $major) {
                $selected = ($major['id'] == $profile['majors_id']) ? 'selected' : '';
                echo "<option value='{$major['id']}' {$selected}>{$major['majors_name']}</option>";
            }
        ?>
    </select>
        
        <br>
        <input type="hidden" name='idprf' value = '<?= $profile['id'] ?>' >
        <button type='submit'>Sửa</button>
        <a href="list-profile.php">Quay lại danh sách</a>
    </form>
</body>
</html>