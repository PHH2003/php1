<?php
//Khai báo mảng
//Cách 1
$array1 = array(2, 4, 6, 'Hello', 'string', true);
//Cách 2
$array2 = [1, 3, 5, 4, 67, 3, 'Xin chào', 'namnv@gmail.com'];

//lấy phần tử có giá trị 'Xin chào'
echo $array2[6];
echo "<br>";
//Mảng 2 chiều
$mang2chieu = [
    [2, 5, 7],
    [1, 3, 6],
    [9, 6, 4]
];
//Lấy phần tử có giá trị là số 3
echo "Phần tử m2c[1,1] = " . $mang2chieu[1][1];

//Mảng liên hợp
$student = [
    'mssv' => 'ph12345',
    'hoten' => 'Nguyễn Văn An',
    'email' => 'annvph12345@gmail.com',
    'diachi' => 'Hà Nội'
];
//Lấy ra họ tên của sinh viên
echo "<br>Họ tên: " . $student['hoten'];
