<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mssv = $_POST['mssv'];
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $diem = $_POST['diem'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <form action="" method='post'>
        Mã số sinh viên: <input type="text" name='mssv' value='<?php echo isset($mssv) ? $mssv : "" ?>'>
        Họ và tên: <input type="text" name='hoten' value='<?php echo isset($hoten) ? $hoten : "" ?>'>
        Ngày sinh: <input type="text" name='ngaysinh'value='<?php echo isset($ngaysinh) ? $ngaysinh : "" ?>'>
        Điểm: <input type="number" name='diem'value='<?php echo isset($diem) ? $diem : "" ?>'>
        <button type='submit'>Hiển thị</button>
    </form>

    <?php
    
        echo "<br>";
        echo "Mã số sinh viên: " . $mssv ;
        echo "<br>";
        echo "Họ và tên: " . $hoten ;
        echo "<br>";
        echo "Ngày sinh " . $ngaysinh ;
        echo "<br>";
        echo "Điểm: " . $diem ;

        function kiemtra($diem){
            if($diem >= 5 ){
                echo "Qua môn";
            }
            else{
                echo "Không qua môn";
            }
        }
        echo "<br>";
        echo kiemtra($diem);
        
    ?>
</body>
</html>