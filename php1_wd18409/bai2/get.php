<?php
// biến môi trường $_GET dùng để lấy dữ liệu từ form sử dụng phương thức GET, hoặc lấy dữ liệu từ URL
$hoten = $_GET['hoten'];
$email = $_GET['email'];

//hiển thị
echo "<h2>Họ tên: $hoten</h2>";
echo "<h2>Email: $email</h2>";
