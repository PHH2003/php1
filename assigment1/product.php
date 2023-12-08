<!-- products.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <title>Danh sách sản phẩm</title>
    
</head>
<body>
<div class="container">
    <header><img src="images/banner-dkn-store-01.jpg"></header>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="news.html">Tin tức</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li><a href="album.html">Kho ảnh</a></li>
            </ul>
        </nav>
    <h1>Danh sách sản phẩm</h1>
    <form method="get">
        <label for="maloai">Chọn loại hàng:</label>
        <select name="maloai" id="maloai">
            <option value="">Tất cả</option>
            <option value="5">Điện thoại</option>
            <option value="4">Laptop</option>
            <option value="6">Phụ kiện</option>
            <option value="2">Đồng hồ</option>
        </select>
        <input type="submit" value="Lọc">
    </form>

    <ul>
        <?php
            include 'data.php';
            $maloai = isset($_GET['maloai']) ? $_GET['maloai'] : '';
            foreach ($products as $product) {
                if ($maloai === '' || $product['maloai'] == $maloai) {
                    echo '<div class="col">
                            <div class="product">
                                <a href="#">
                                    <img style="width: 150px; height: 200px; padding: 5px;" src="' . $product['hinh'] . '" alt="Product Image">
                                    <h3>' . $product['tenhh'] . '</h3>
                                    <div class="price">' . $product['gia'] . '</div>
                                    <div class="desc">Số lượng: ' . $product['soluong'] . '</div>
                                    <button>
                                        <a href="detail.php?id=' . $product['mahh'] . '">Xem chi tiết</a>
                                    </button>
                                </a>
                            </div>
                        </div>';
                }
            }
        ?>
    </ul>
    <footer>
            <p>&copy; (c) Academy PolyTechnic</p>
        </footer>
        </div>
</body>
</html>