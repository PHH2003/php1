<?php

// Khởi tạo cookie
// setcookie('ten cookie', 'giá trị', 'Thời gian sống của cookie');
setcookie('username', 'hiepph', time() + 60*60);

?>

<h2>Khởi tạo cookie</h2>
<a href="get_cookie.php">Kiểm tra cookie</a>