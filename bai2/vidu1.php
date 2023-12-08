<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $hoten = $_POST['hoten'];
    $tuoi = $_POST['tuoi'];
    $thanhpho = $_POST['thanhpho'];

    // echo "<h2>Họ tên: $hoten<h2/>";
    // echo "<h2>Tuổi: $tuoi<h2/>";
    // echo "<h2>Thành phố: $thanhpho<h2/>";
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
        Họ tên: <input type="text" name='hoten' value='<?php echo isset($hoten) ? $hoten : "" ?>'>
        <br>
        Tuổi: <input type="number" name='tuoi' value='<?php echo isset($tuoi) ? $tuoi : "" ?>' >
        <br>
        <select name="thanhpho">
            <option value="0" selected>Chọn thành phố</option>
            <option value="HN">Hà Nội</option>
            <option value="HCM">Hồ Chí Minh</option>
            <option value="Vinh">TP.Vinh</option>
        </select>
        <br>
        <button type='submit'>Gửi</button>
    </form>

    <div>
        <?php
            if(isset($hoten)){
                echo "<h2>Họ tên: $fullName<h2/>";
                echo "<h2>Email: $email<h2/>";
                echo "<h2>Số điện thoại: $phoneNumber<h2/>";
                echo "<h2>Địa chỉ: $address<h2/>";
                echo "<h2>Khóa học: $ac<h2/>";
            }
           
        ?>
    </div>

</body>
</html>
