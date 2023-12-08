
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullName = $_POST['fullName'];
        $date = $_POST['date'];
        $point = $_POST['point'];
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
    <form action="" method='post'>
        Nhập họ tên: <input type="text" name='fullName' >
        <br>
        Email: <input type="text" name='date' >
        <br>
        Nhập điểm: <input type="number" name='point' >
        <br>
        <button type='submit'>Gửi</button>
    </form>

    <?php if(isset($fullName)){
            echo "<h2>Họ tên: $fullName<h2/>";
            echo "<h2>Ngày sinh: $date<h2/>";
            echo "<h2>Điểm: $point<h2/>"; 
            if($point < 5) {
            echo "<h2>$fullName xếp loại học sinh Yếu<h2/>";
            }   
            if(5<=$point && $point<6.5) {
                echo "<h2>$fullName xếp loại học sinh TB<h2/>";
                };   
                if(6.5<=$point &&$point < 7.5) {
                    echo "<h2>$fullName xếp loại học sinh Khá<h2/>";
                    }  ;             if(7.5<= $point && $point < 9) {
                        echo "<h2>$fullName xếp loại học sinh Giỏi<h2/>";
                        } ;
                        if($point>=9) {
                            echo "<h2>$fullName xếp loại học sinh Xuất sắc<h2/>";
                            }   ;  
    }
        
    ?>
</body>
</html>