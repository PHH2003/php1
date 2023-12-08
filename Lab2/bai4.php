<?php
    $array = array(23,12,30,15,18,20,21,1,6,27);
    $somax = $array[0];

    $tong = 0;
    $trungbinh = 0;

    echo "Các giá trị của mảng là: ";
    foreach ($array as $value) {
        echo$value . " ";
    }
    echo "<br>";

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $somax) {
            $somax = $array[$i];
        }
    }
    echo "Số lớn nhất trong mảng là:". $somax;
    echo "<br>";
    foreach ($array as $number) {
            $tong += $number;
    }
    // echo count($array);
    echo "Trung bình:". $trungbinh = $tong / count($array);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
    
</body>
</html>
