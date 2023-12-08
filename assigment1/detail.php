

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail</title>
    <link rel="stylesheet" type="text/css" href="css/common.css">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        .product-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        p {
            color: #555;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
<body>
    <div class="container">
        <header><img src="images/banner-dkn-store-01.jpg"></header>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="news.html">Tin tức</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li><a href="album.html">Kho ảnh</a></li>
            </ul>
        </nav>
        <h1>Chi tiết sản phẩm</h1>
    <?php

 include 'data.php';
 $mahh =$_GET['id'];
 
 $product = array_filter($products, function ($p) use ($mahh) {
     return isset($p['mahh']) && $p['mahh'] == $mahh;
 });
 

 if (!empty($product)) {
     $product = reset($product);
     echo "<img src='{$product['hinh']}' alt='Hình ảnh sản phẩm'>";
     echo "<p><strong>{$product['tenhh']}</strong></p>";
     echo "<p>Giá: {$product['gia']}</p>";
     echo "<p>Mô tả: {$product['mota']}</p>";
 } else {
     echo "<p>Sản phẩm không tồn tại.</p>";
 }
    ?>
<br>
        <a href="index.php">Quay lại danh sách sản phẩm</a>
        <footer>
            <p>&copy; (c) Academy PolyTechnic</p>
        </footer>
    </div>
</body>
