<?php
if(isset($_COOKIE['username'])){
    echo "<h2>Xin chào: ".$_COOKIE['username']. "</h2>";
    echo "<a href='del_cookie.php'>Xoá cookie</a>";
}else{
    echo "<h2>Cookie không tồn tại</h2>";
}

?>