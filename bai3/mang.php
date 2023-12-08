<?php
// khai báo mảng trong php
    // cách 1:
    $array1 = array(1,2,3, 'hello', 'string');
    // cách 2: 
    $array2 = [1,2,3,4,5, 'xin chao php', 'hiep@gmail.com'];
    //Mảng 2 chiều
    $mang2chieu = [
        [2,4,5],
        [1,6,8],
        [3,7,9]
    ];
    // Lấy phần tử có giá trị là số 6
    echo "Phần tử mang2chieu[1,1] = " .$mang2chieu[1][1];
    echo "</br>";
// mảng liên hợp
$student = [
    'mssv' => 'ph26732',
    'hoten' => 'Phan Huy Hiệp',
    'emai' => 'hiepph@gmail.com',
    'diachi' => 'Hanoi',
];
echo "họ tên: ".$student['hoten'];
    
?>