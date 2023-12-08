<?php
include_once 'header.php';
include_once '../connection.php';
        $id_product = $_GET['id'];
        $sql = "SELECT * FROM product WHERE id_product = $id_product";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $product = $stmt -> fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style='width:90%; margin: 0 auto;'>
        <div style='width:90%; margin: 0 auto;'>
            <h2 class="text-4xl text-center text-blue-700 font-bold">Detail Page</h2>
        </div>
        <button class="bg-blue-500 mt-1 hover:bg-blue-700 text-white font-bold my-8 py-1 px-2 rounded">
            <a href="./home.php" class="text-white">Quay về trang chủ</a>
        </button>
        <!-- Thông tin sp -->
        <div class="flex my-8">
    <div class="w-1/2">
        <img src="../admin/product/images/<?= $product['img'] ?>" alt="<?= $product['name_product'] ?>" class="w-full h-auto">
    </div>

    <div class="w-1/2 px-4">
        <h3 class="text-2xl font-semibold mb-2"><?= $product['name_product'] ?></h3>
        <div class="text-lg mb-2 text-red-500">Giá: <?= $product['price'] ?></div>
        <div class="text-lg mb-2">Số lượng: <?= $product['quantity'] ?></div>
        <div class="text-base mb-4">Mô tả: <?= $product['description'] ?></div>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md"><a href="../client/cart.php">Thêm vào giỏ hàng</a></button>
    </div>
</div>
    </div>

</body>

</html>

<?php
include_once 'footer.php';
?>