

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/common.css">
</head>

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

        <article>
        <?php 
        include 'data.php' ;
        foreach($products as $index => $product) : ?>
          
            <div class="col">
                <div class="product">
                    <a href='#'>
                    <?php echo "<img style='width: 150px; height: 200px; padding:5px;' src={$product['hinh']}>" ?>
                        <h3><?php echo $product['tenhh'] ?></h3>
                        <div class="price"><?php echo $product['gia'] ?></div>
                        <div class="desc"> Số lượng:
                        <?php echo $product['soluong'] ?>
                       
                        </div> 
                    </a><button>
                            <?php echo "<a href='detail.php?id={$product['mahh']}'>Xem chi tiết</a>"; ?>
                        </button>
                </div>
            </div>

        
        <?php endforeach ?></article>

        <footer>
            <p>&copy; (c) Academy PolyTechnic</p>
        </footer>
    </div>
</body>
