<?php
    // Cai dat session
    session_start();
    // Khởi tạo session
    $_SESSION['username']= 'admin';
?>

<h2>Khởi tạo session username</h2>
<a href="get_session.php">Kiểm tra session</a>