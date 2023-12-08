<?php

// Xoá cookie
setcookie('username', '', time() - 60*60);
header("Location: get_cookie.php");
die;

?>