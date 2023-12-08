<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $tk=$_POST['tk'];
        $mk=$_POST['mk'];
        if($tk == "admin" && $mk == "123"){
            setcookie('username', 'admin', time() + 60*3);
            header("Location: index.php");
            die;
        }
        if($tk == "" && $mk == ""){
            echo "tk, mk không được để trống";
        }
        else{
            echo "Sai tk, mk";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    tài khoản: <input type="text" name="tk">
    <br>
    mật khẩu: <input type="text" name="mk" id="">
    <br>
    <button type="submit">Login</button>
    </form>
</body>
</html>