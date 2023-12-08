<?php
session_start();
// Kiểm tra session
if(isset($_SESSION['username'])){
    echo "<h2>Xin chào: " .$_SESSION['username']."</h2>";
    echo "<a href='del_session.php'>Xoá session</a>";
}else{
    echo "<h2>Session không tồn tại</h2>";
}

?>