
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $quantity1 = $_POST['quantity1'];
        $price1 = $_POST['price1'];
        $quantity2 = $_POST['quantity2'];
        $price2 = $_POST['price2'];
        $quantity3 = $_POST['quantity3'];
        $price3 = $_POST['price3'];
        $quantity4 = $_POST['quantity4'];
        $price4 = $_POST['price4'];
        $quantity5 = $_POST['quantity5'];
        $price5 = $_POST['price5'];

        $thanhtien1 = $quantity1 * $price1;
        $thanhtien2 = $quantity2 * $price2;
        $thanhtien3 = $quantity3 * $price3;
        $thanhtien4 = $quantity4 * $price4;
        $thanhtien5 = $quantity5 * $price5;
        $tongtien = $thanhtien1 + $thanhtien2 + $thanhtien3 + $thanhtien4 + $thanhtien5;
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
    <table border="1">
    <tr>
        <th colspan="5">ĐƠN HÀNG</th>
    </tr>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Bimbim</td>
        <td><input type="number" name='quantity1' value='<?php echo isset($quantity1) ? $quantity1 : "" ?>' ></td>
        <td><input type="number" name='price1' value='<?php echo isset($price1) ? $price1 : "" ?>' ></td>
        <td><?php if(isset($quantity1)){echo $thanhtien1;} ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Socola</td>
        <td><input type="number" name='quantity2' value='<?php echo isset($quantity2) ? $quantity2 : "" ?>' ></td>
        <td><input type="number" name='price2' value='<?php echo isset($price2) ? $price2 : "" ?>' ></td>
        <td><?php if(isset($quantity2)){echo $thanhtien2;}  ?></td>
    </tr>   
    <tr>
        <td>3</td>
        <td>Hạnh nhân</td>
        <td><input type="number" name='quantity3'value='<?php echo isset($quantity3) ? $quantity3 : "" ?>' ></td>
        <td><input type="number" name='price3'value='<?php echo isset($price3) ? $price3 : "" ?>' ></td>
        <td><?php  if(isset($quantity3)){echo $thanhtien3;}  ?></td>
    </tr>    
    <tr>
        <td>4</td>
        <td>Omachi</td>
        <td><input type="number" name='quantity4' value='<?php echo isset($quantity4) ? $quantity4 : "" ?>'></td>
        <td><input type="number" name='price4' value='<?php echo isset($price4) ? $price4 : "" ?>'></td>
        <td><?php if(isset($quantity4)){echo $thanhtien4;}  ?></td>
    </tr>    
    <tr>
        <td>5</td>
        <td>Sữa chua</td>
        <td><input type="number" name='quantity5' value='<?php echo isset($quantity5) ? $quantity5 : "" ?>'></td>
        <td><input type="number" name='price5'value='<?php echo isset($price5) ? $quantity5 : "" ?>' ></td>
        <td><?php  if(isset($quantity5)){echo $thanhtien5;}  ?></td>
    </tr>
    <tr>
        <td colspan="4">Tổng tiền</td>
        <td><?php if(isset($tongtien)){ echo $tongtien;} ?></td>
    </tr>
    <tr>
        <td colspan="5">
        <button type='submit'>Gửi</button>
        </td>
    </tr>
    </table>
    </form>
</body>
</html>