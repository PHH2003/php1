<?php

//vòng lặp for
for ($i = 1; $i <= 5; $i++) {
    echo "<h2>$i. Xin chào thế giới</h2>";
}

//Vòng lặp while
$dem = 1;
while ($dem <= 5) {
    echo "<h3>$dem. Hello world.</h3>";
    $dem++;
}
//Vòng lặp do .. while
$dem = 1;
do {
    echo "<h3>$dem. Vòng lặp do .. while.</h3>";
    $dem++;
} while ($dem <= 5);
