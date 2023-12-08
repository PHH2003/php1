<?php
    $stn = array(1,6,12,15,18,20,21,23,27,30);
    $tong = 0;

    echo "Các giá trị của mảng là: ";
    foreach ($stn as $value) {
        echo$value . " ";
    }
    echo "<br>";

    foreach ($stn as $number) {
        // Kiểm tra xem số có lớn hơn 10 và chia hết cho 3 không
        if ($number > 10 && $number % 3 == 0) {
            // Cộng số vào tổng
            $tong += $number;
        }
    }
    echo "tổng các số lớn hơn 10 và chia hết cho 3 là: ". $tong;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    
</body>
</html>

