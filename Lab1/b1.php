<!-- // viết 1 form dùng để tính  +, - , x, : 2 số -->

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $course = $_POST['course'];
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
    <form action="" method='post'>
        Nhập họ tên: <input type="text" name='fullName' >
        <br>
        Nhập email: <input type="email" name='email' >
        <br>
        Nhập số điện thoại: <input type="number" name='phoneNumber' >
        <br>
        Nhập địa chỉ: <input type="text" name='address' >
        <br>
        <select name="course">
            <option value="0" selected>Chọn khóa học</option>
            <option value="PHP1">PHP1</option>
            <option value="Nodejs">Nodejs</option>
            <option value="Reactjs">Reactjs</option>
            <option value="JavaScript">JavaScript</option>
        </select>
        <br>
        <button type='submit'>Gửi</button>
    </form>

    <?php
    if(isset($fullNames)){
         echo "<h2>Họ tên: $fullName<h2/>";
            echo "<h2>Email: $email<h2/>";
            echo "<h2>Số điện thoại: $phoneNumber<h2/>";
            echo "<h2>Địa chỉ: $address<h2/>";
            echo "<h2>Khóa học: $course<h2/>";
    }
                  
    ?>
</body>
</html>