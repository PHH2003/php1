<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sanpham1 = $_POST['sp1'];
    $gia1 = $_POST['gia1'];
    $sanpham2 = $_POST['sp2'];
    $gia2 = $_POST['gia2'];
    $sanpham3 = $_POST['sp3'];
    $gia3 = $_POST['gia3'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <form action="" method ='post'>
        <div style='margin-top:5px;'>
            Sản phẩm 1: <input type="text" name='sp1' value='<?php echo isset($sanpham1) ? $sanpham1 : "" ?>'>
            Giá: <input type="number" name='gia1' value='<?php echo isset($gia1) ? $gia1 : "" ?>'>
        </div>
        
        <div style='margin-top:5px;'>
            Sản phẩm 2: <input type="text" name='sp2' value='<?php echo isset($sanpham2) ? $sanpham2 : "" ?>'>
            Giá: <input type="number" name='gia2' value='<?php echo isset($gia2) ? $gia2 : "" ?>'>
        </div>

        <div style='margin-top:5px;'>
            Sản phẩm 3: <input type="text" name='sp3' value='<?php echo isset($sanpham3) ? $sanpham3 : "" ?>'>
            Giá: <input type="number" name='gia3' value='<?php echo isset($gia3) ? $gia3 : "" ?>'>
        </div>

        <button type='submit' style='margin-top:5px; background-color:blue;
        width:50px; height:25px;'>Gửi</button>
    </form>

    <?php
        echo "Sản phẩm 1: ".$sanpham1 .", Giá: " .$gia1;
        echo "<br>";
        echo "Sản phẩm 2: ".$sanpham2 .", Giá: " .$gia2;
        echo "<br>";
        echo "Sản phẩm 3: ".$sanpham3 .", Giá: " .$gia3;
        echo "<br>";

        function pricemax($gia1, $gia2, $gia3){
           return max($gia1, $gia2, $gia3);
        }
        $giamax = pricemax($gia1, $gia2, $gia3);
        echo "Sản phẩm có giá cao nhất là: ";
        if($giamax == $gia1){
            echo '<div style="color:red;">Sản phẩm 1: ' . $sanpham1 . ', Giá: ' . $gia1 . '</div>';
        }
        if($giamax == $gia2){
            echo '<div style="color:red;">Sản phẩm 2: ' . $sanpham2 . ', Giá: ' . $gia2 . '</div>';
        }
        if($giamax == $gia3){
            echo '<div style="color:red;">Sản phẩm 3    : ' . $sanpham3 . ', Giá: ' . $gia3 . '</div>';
        }
    ?>
</body>
</html>