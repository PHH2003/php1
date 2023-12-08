<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div style='width:90%; margin: 0 auto;'>
        <h2 class="text-4xl text-center text-blue-600 font-bold">Home Page</h2>
        <article
            class="p-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mx-auto py-8">
            <?php 
            include '../connection.php';
            $sql = "SELECT * FROM product";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach ($result as $product) : ?>
                <div class="border border-gray-300 p-4 text-center">
                    <a href='detail.php?id=<?= $product['id_product'] ?>'>
                        <img class="w-48 h-64 object-cover mx-auto mb-4"
                            src='../admin/product/images/<?= $product['img'] ?>' alt="<?= $product['name_product'] ?>">
                        <h3 class="text-lg font-semibold whitespace-nowrap overflow-hidden  max-w-full text-ellipsis">
                            <?= $product['name_product'] ?></h3>
                        <div class="price font-bold text-red-700">Giá: <?= $product['price'] ?></div>
                        <div class="desc">Số lượng: <?= $product['quantity'] ?></div>
                    </a>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded mt-2 hover:bg-blue-800">
                        <a href='detail.php?id=<?= $product['id_product'] ?>'>Xem chi tiết</a>
                    </button>
                </div>
            <?php endforeach ?>
        </article>
    </div>
</body>

</html>
<?php
include_once 'footer.php';
?>