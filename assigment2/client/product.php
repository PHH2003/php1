<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <?php
    include_once "../connection.php";
    $sqlCategory = "SELECT * FROM category";
    $stmtCategory = $conn->prepare($sqlCategory);
    $stmtCategory->execute();
    $categories = $stmtCategory->fetchAll();
if (isset($_GET['id_category'])) {
    $selectedCategoryId = $_GET['id_category'];
    $sqlProducts = "SELECT * FROM product WHERE id_category = :id_category";
    $stmtProducts = $conn->prepare($sqlProducts);
    $stmtProducts->bindParam(':id_category', $selectedCategoryId, PDO::PARAM_INT);
    $stmtProducts->execute();
    $products = $stmtProducts->fetchAll();
} else {
    $sqlAllProducts = "SELECT * FROM product";
    $stmtAllProducts = $conn->prepare($sqlAllProducts);
    $stmtAllProducts->execute();
    $products = $stmtAllProducts->fetchAll();
}
?>
    <div style='width:90%; margin: 0 auto;'>
        <h2 class="text-4xl text-center text-blue-600 font-bold">Products Page</h2>
        <form method="get" class="bg-white p-4 shadow-md rounded-md">
            <label class="block text-gray-700 text-sm font-bold mb-2">Chọn loại hàng:</label>
            <div class="relative">
                <select name="id_category"
                    class="block appearance-none w-full border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500 focus:shadow-outline-blue">
                    <?php
                 foreach ($categories as $category) {
                    $selected = ($category['id_category'] == $selectedCategoryId) ? 'selected' : '';
                    echo "<option value=\"{$category['id_category']}\" $selected>{$category['name_category']}</option>";
                }
                ?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12l-8-8-1 1 9 9 9-9-1-1-8 8z" />
                    </svg>
                </div>
            </div>
            <input type="submit" value="Hiển thị"
                class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue cursor-pointer">
        </form>

        <article
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mx-auto py-8">
            <?php foreach ($products as $product) : ?>
            <div class="border border-gray-300 p-4 text-center">
                <a href='#'>
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
<?php include_once 'footer.php'; ?>