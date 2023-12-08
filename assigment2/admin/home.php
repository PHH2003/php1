<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../client/login.php');
}

include_once '../connection.php';
$sqlProduct = "SELECT * FROM product";
$stmtProduct = $conn->prepare($sqlProduct);
$stmtProduct->execute();
$totalRowsProduct = $stmtProduct->rowCount();

$sqlCategory = "SELECT * FROM category";
$stmtCategory = $conn->prepare($sqlCategory);
$stmtCategory->execute();
$totalRowsCategory = $stmtCategory->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">
    <h2 class="text-4xl text-center text-blue-600 font-bold mb-8">Admin Dashboard</h2>
    <div class="text-right mb-4">
        <p class="text-blue-500">Welcome, Hiepph</p>
        <a href="../client/logout.php" class="text-red-500 hover:underline">Đăng xuất</a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="bg-white p-4 shadow-md rounded-md">
            <h3 class="text-lg font-bold mb-4">Tổng số lượng sản phẩm</h3>
            <div class="flex items-center justify-center">
                <span class="text-4xl font-bold text-blue-500"><?= $totalRowsProduct?></span>
            </div>
            <div class="mt-4">
                <a href="../admin/product/list.product.php" class="text-blue-500 hover:underline">Xem chi tiết</a>
            </div>
        </div>

        <div class="bg-white p-4 shadow-md rounded-md">
            <h3 class="text-lg font-bold mb-4">Tổng số lượng danh mục</h3>
            <div class="flex items-center justify-center">
                <span class="text-4xl font-bold text-green-500"><?= $totalRowsCategory?></span>
            </div>
            <div class="mt-4">
                <a href="../admin/category/list.category.php" class="text-green-500 hover:underline">Xem chi tiết</a>
            </div>
        </div>
    </div>

    <div class="mt-8 text-center">
        <a href="../client/home.php " class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-gray cursor-pointer">Quay về trang chủ</a>
    </div>
</div>

</body>
</html>
