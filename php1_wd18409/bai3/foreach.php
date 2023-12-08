<?php
$array1 = [
    2, 4, 1, 454, 2, 3
];

//Lấy ra tất cả phần tử của mảng
for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] . " ; ";
}
echo "<br>";
//Vòng lặp foreach
foreach ($array1 as $item) {
    echo " $item ; ";
}

//Cách 2
foreach ($array1 as $key => $value) {
    echo "<br> $key => $value";
}
