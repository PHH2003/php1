<?php
    $arr = [
        2,3,4,333,5,6
    ];

    // lấy ra tất cả phần tử của mảng
    for ($i = 0; $i<count($arr); $i++){
        echo $arr[$i]."; ";
    }
    echo "<br>";
    // vòng lặp foreach forech
    foreach ($arr as $item){
        echo " $item; ";
    }

    // cách 2
    foreach($arr as $key => $value){
        echo "<br> $key => $value";
    }
?>