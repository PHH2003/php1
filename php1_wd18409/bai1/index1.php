<?php

echo "<h1>Trang chủ website</h1>";
echo "<h2>Chào mừng mọi người đã đến với website</h2>";

//Khai báo biến
$a = 10;
$hoTen = "Nguyễn Văn Nam";
$b = 12.3;
$c = true;

echo $hoTen, $a, $b, $c;

//Toán tử, toán hạng
$a = 5;
$b = 10;
$tong = $a + $b;
$hieu = $a - $b;
$tich = $a * $b;
$thuong = $a / $b;

$mu = $a ** 2;

//Chia lấy dư
$du = $a % 2; //$du = 1;
$a = 5;
$c = ++$a;
echo "<h1>c = $c, a = $a</h1>";
$a = 5;
$c = $a++;
echo "<h1>c = $c, a = $a</h1>";

//Toán tử logic
$a = 5;
$b = 6;
$c = ($a > $b); //$c = false;
$c = ($a == '5'); //$c = true;
$c = ($a === '5'); //$c = false;
//
$bool = true;
$b = !$bool; //$b = false;
