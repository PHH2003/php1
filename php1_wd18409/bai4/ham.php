<?php
//Hàm không có giá trị trả về
function hello()
{
    echo "<h1>Hello World</h1>";
}


hello();
//Hàm có tham số
function hello1($str)
{
    echo "<h2>$str</h2>";
}
hello1("Xin chào các bạn lớp WD18409");

//Hàm tham số có giá trị mặc đinh
function hello2($name = 'Lê Văn Công')
{
    echo "<h2>Xin chào $name</h2>";
}

//Lời gọi hàm
$name = "Trần Công Minh";
hello2($name);

//Hàm có giá trị trả về
function tinhtong($a, $b)
{
    return $a + $b;
}
$a = 10;
$b = 12;
echo "<h2>Tổng của $a + $b = " . tinhtong($a, $b) . "</h2>";

//Hàm không biết trước số lượng tham số truyền vào
function tinhtongcacso()
{
    //Lấy ra các tham số
    $args = func_get_args(); //hàm func_get_args lấy tất cả các tham số cho vào 1 mảng
    return array_sum($args);
}

//gọi hàm
echo "Tổng các số = " . tinhtongcacso(23, 3, 2, 5, 2, 1, 3, 13, 1, 231, 7);
