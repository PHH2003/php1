<?php
// $_SERVER lấy thông tin server
//Kiểm tra yêu cầu của người dùng gửi lên server có phải là phương thức POST hay không, nếu đúng thì mới cho phép làm việc
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoten = $_POST['hoten'];
    $tuoi = $_POST['tuoi'];
    $thanhpho = $_POST['thanhpho'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>

<body>
    <!-- Dữ liệu sẽ được gửi trực tiếp vào trang vidu1.php khi action rỗng -->
    <form action="" method="post">
        Họ tên: <input type="text" name="hoten" value="<?php echo isset($hoten) ? $hoten : "" ?>">
        <br>
        Tuổi: <input type="number" name="tuoi" id="">
        <br>
        Thành phố:
        <select name="thanhpho" id="">
            <option value="0">Chọn thành phố</option>
            <option value="HCM" <?php
                                if (isset($thanhpho)) {
                                    echo ($thanhpho == "HCM") ? "selected" : "";
                                }
                                ?>>Hồ chí minh</option>
            <option value="HN">Hà Nội</option>
            <option value="Vinh">Vinh</option>
            <option value="QUN">Quảng Ninh</option>
        </select>
        <br>
        <button type="submit">Gửi</button>
    </form>
    <div>
        <?php
        // hàm isset dùng để kiểm tra 1 biến xem nó có tồn tại không, nếu có trả về true, ngược lại trả về false
        // Nếu $hoten tồn tại thì in thông tin
        if (isset($hoten)) {
            echo "<h2>
                Họ tên: $hoten <br>
                TUổi: $tuoi<br>
                Thành phố: $thanhpho
            </h2>";
        }
        ?>
    </div>
</body>

</html>