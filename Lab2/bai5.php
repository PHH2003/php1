<?php
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $tongtien = $gia*$soluong;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 5</title>
</head>
<body>
    <form action="" method = 'post'>
        Tên sản phẩm: <input type="text" name ='tensp' value='<?php echo isset($tensp) ? $tensp : "" ?>'>
        Giá sản phẩm: <input type="number" name ='gia' value='<?php echo isset($gia) ? $gia : "" ?>'>
        Sô lượng sản phẩm: <input type="number" name ='soluong' value='<?php echo isset($soluong) ? $soluong : "" ?>'>
        <button type ='submit'>Tính tiền</button>
    </form>

    <?php
        if($soluong>3){
            echo "Số tiền phải thanh toán cho sản phẩm $tensp là: ". $tongtien-$tongtien*0.03;
        }
        else{
            echo "số tiền phải thanh toán cho sản phẩm $tensp
             là: ". $tongtien; 
        }
        
    ?>
</body>
</html>