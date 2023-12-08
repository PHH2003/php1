<?php
    
$products = [
    ['id'=>1,'product_name'=>'Máy giặt LG 320G', 'image'=>'https://www.lg.com/vn/images/may-giat/F2515STGW/gallery/350.jpg','price'=>12000000, 'quantity'=>'1000'],
    ['id'=>2,'product_name'=>'Iphone 14 Pro Max 128GB', 'image'=>'https://haidangmobile.vn/wp-content/uploads/2022/09/iphone-14-promax-128gb-newfullbox.jpg','price'=>26900000, 'quantity'=>'700'],
    ['id'=>3,'product_name'=>'Samsung Galaxy S23 256GB', 'image'=>'https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_32068/samsung-galaxy-_main_729_1020.png.webp','price'=>21990000, 'quantity'=>'1600'],
    ['id'=>4,'product_name'=>'MacBook Air 13-inch M1 (8GB/256GB)', 'image'=>'https://onelap.vn/wp-content/uploads/2021/11/air-m1-tech2nd.jpg','price'=>19000000, 'quantity'=>'7000'],
    ['id'=>5,'product_name'=>'MacBook Air M2 13.6" 2022 - 512GB', 'image'=>'https://cdn.tgdd.vn/Products/Images/44/289441/Slider/vi-vn-apple-macbook-air-m2-2022-16gb-1.jpg','price'=>35990000, 'quantity'=>'100'],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
<form action="" method="post">
        <table border="1">
        <tr>
        <th colspan="5">Danh sach</th>
    </tr>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>image</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
        <?php foreach($products as $index => $product) : ?>
            <tr>
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['product_name'] ?></td>
                <td><?php echo "<img style='width: 250px; height: 200px; padding:5px;' src={$product['image']}>" ?></td>
                <td><?php echo $product['price'] ?></td>
                <td><?php echo $product['quantity'] ?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </form>
</body>
</html>