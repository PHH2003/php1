<?php
// sử dụng biến môi trường $_POST để lấy thông tin từ form sử dụng phương thức POST
$hoten = $_POST["hoten"];
$email = $_POST["email"];

echo "<h2>Họ tên: $hoten</h2>";
echo "<h2>Email: $email</h2>";
