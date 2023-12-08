<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form sử dụng phương thức GET</title>
</head>

<body>
    <!-- 
        form sử dụng phương thức get, 
        action: hành động, là trang để xử lý dữ liệu của form, nếu action bằng rỗng thì trang xử lý là chính nó
    -->
    <form action="get.php" method="get">
        Họ tên: <input type="text" name="hoten" id="">
        <br>
        Email: <input type="email" name="email" id="">
        <br>
        <button type="submit">Gửi</button>
    </form>
</body>

</html>