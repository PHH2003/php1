<!-- // viết 1 form dùng để tính  +, - , x, : 2 số -->

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $pheptinh = $_POST['pheptinh'];
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
        Nhập a: <input type="number" name='a' >
        <br>
        Nhập b: <input type="number" name='b' >
        <br>
        <select name="pheptinh">
            <option value="0" selected>Chọn phép tính</option>
            <option value="cong">Cộng</option>
            <option value="tru">Trừ</option>
            <option value="nhan">Nhân</option>
            <option value="chia">Chia</option>
        </select>
        <br>
        <button type='submit'>Gửi</button>
    </form>

    <?php
        if($pheptinh == 'cong'){
            echo 'tổng:' .$tong=$a+$b;
        }  
        if($pheptinh == 'tru'){
            echo 'hiệu:' .$hieu=$a-$b;
        }
        if($pheptinh == 'nhan'){
            echo 'tích:' .$tich=$a*$b;
        }
        if($pheptinh == 'chia'){
            echo 'thương:' .$thuong=$a/$b;
        }
    ?>
</body>
</html>