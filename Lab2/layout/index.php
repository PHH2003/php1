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
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/common.css">
</head>

<body>
    <div class="container">
        <header><img src="images/xbanner-trang-lien-he-moi.jpg.pagespeed.ic.FQvWHe7Pcx.jpg"></header>
        <!--Menu-->
        <nav>
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="about.html">Giới thiệu</a></li>
                <li><a href="news.html">Tin tức</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li><a href="album.html">Kho ảnh</a></li>
            </ul>
        </nav>
        <!--End menu-->
        <!--List products-->
        <article>
        <?php foreach($products as $index => $product) : ?>
          
            <div class="col">
                <div class="product">
                    <a href="#">
                    <?php echo "<img style='width: 150px; height: 200px; padding:5px;' src={$product['image']}>" ?>
                        <h3><?php echo $product['product_name'] ?></h3>
                        <div class="price"><?php echo $product['price'] ?></div>
                        <div class="desc"> Số lượng:
                        <?php echo $product['quantity'] ?>
                        </div>
                    </a>
                </div>
            </div>

        
        <?php endforeach ?></article>
  
        <!--End list products-->
        <footer>
            <p>&copy; (c) Academy PolyTechnic</p>
        </footer>
    </div>
</body>

</html>