<?php
session_start();
// Xoá session
// 3 cách:
// cách 1:
session_destroy(); // Huỷ bỏ toàn bộ session
// cách 2:
session_unset(); // Xoá bỏ toàn bộ session
// cách 3:
unset($_SESSION['username']); // Xoá bỏ 1 biến session mà mình muốn
header("location: get_session.php");
die;
?>