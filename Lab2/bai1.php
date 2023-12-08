<?php
        $thunhap = $_POST['thunhap'];
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
        Thu nhập:<input type="number" name ="thunhap" value='<?php echo isset($thunhap) ? $thunhap : "" ?>'>
        <button type ='submit'>Xem</button>
    </form>

    <?php
    if(isset($thunhap)){
               if(20000000 <= $thunhap && $thunhap < 30000000 ){
            echo "Nộp 10% thuế: ". $thunhap+ $thunhap*0.1;
        }
        if(30000000 <= $thunhap && $thunhap < 40000000 ){
            echo "Nộp 12,5% thuế: ". $thunhap+ $thunhap*0.125;
        }
        if(40000000 <= $thunhap && $thunhap < 50000000 ){
            echo "Nộp 15% thuế: ". $thunhap+ $thunhap*0.15;
        }
        if(50000000 <= $thunhap){
            echo "Nộp 20% thuế: ". $thunhap+ $thunhap*0.2;
        }
    }
 
    ?>
</body>
</html>