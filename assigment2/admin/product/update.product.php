<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: ../../client/login.php');
    }
include_once "../../connection.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name_product = $_POST['name_product'];
    // $img = $_POST['img'];
    $img = $_FILES['img'];
    $file_name = $img['name'];
    if (!empty($file_name)) {
        move_uploaded_file($img['tmp_name'], "images/" .$file_name);
    } else {
        $file_name = $_POST['old_img'];
    };
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $category = $_POST['category'];
    $id_product = $_POST['id'];
    $update_at = date('Y-m-d H:i:s');
    $sql = "UPDATE product SET name_product='$name_product', img='$file_name', price='$price', quantity='$quantity', description='$description', status='$status', id_category='$category', update_at='$update_at' WHERE id_product = $id_product";
    $stmt = $conn->prepare($sql);
    $stmt -> execute();
    header('location:list.product.php');
    die;
}

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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Update Product</title>
</head>

<body>
    <div class='max-w-md mx-auto p-4'>
        <h2 class="text-2xl font-bold mb-4">Update product</h2>
        <form action="" method="post" enctype="multipart/form-data" class="max-w-md mx-auto my-4 p-4 bg-white border rounded-md shadow-md">
            <label class="block text-sm font-medium text-gray-600">Name product</label>
            <input required type="text" name="name_product" class="outline-none mt-1 p-2 border rounded-md w-full"
                value="<?= $product['name_product'] ?>">
            <label class="block text-sm font-medium text-gray-600">img</label>
            <input  type="file" name="img" class="mt-1 p-2 border rounded-md w-full">
            <input required type="hidden" name='old_img' value = '<?= $product['img'] ?>'>
            <label class="block text-sm font-medium text-gray-600">price</label>
            <input required type="text" name="price" class="outline-none mt-1 p-2 border rounded-md w-full" value="<?= $product['price'] ?>">
            <label class="block text-sm font-medium text-gray-600">quantity</label>
            <input required type="text" name="quantity" class="outline-none mt-1 p-2 border rounded-md w-full"
                value="<?= $product['quantity'] ?>">
            <label class="block text-sm font-medium text-gray-600">description</label>
            <input required type="text" name="description" class="outline-none mt-1 p-2 border rounded-md w-full"
                value="<?= $product['description'] ?>">
            <label class="block text-sm font-medium text-gray-600">status</label>
            <input required type="text" name="status" class="outline-none mt-1 p-2 border rounded-md w-full"
                value="<?= $product['status'] ?>">
            <label class="block text-sm font-medium text-gray-600">Category</label>
            <select name="category" class="mt-1 p-2 border rounded-md w-full">
                <?php
                $sql = "SELECT * FROM category";
                $stmt = $conn -> prepare($sql);
                $stmt -> execute();
                $result = $stmt -> fetchAll();
                foreach ($result as $category) {
                    $selected = ($category['id_category'] == $product['id_category']) ? 'selected' : '';
                    echo "<option value=\"{$category['id_category']}\" $selected>
                        {$category['name_category']}
                    </option>";
                }
                ?>
            </select>
            <input type="hidden" name="id" value="<?= $product['id_product'] ?>">
            <div class="mt-4 flex space-x-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white  rounded-md">Update</button>
                <a href="list.product.php" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Back to the List</a>
            </div>
        </form>
    </div>
</body>
</html>