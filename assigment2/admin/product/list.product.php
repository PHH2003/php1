<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: ../../client/login.php');
    }
    include_once '../../connection.php';
    $sql = "SELECT product.*, category.name_category FROM product JOIN category  ON product.id_category= category.id_category";
    $stmt = $conn -> prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>List product</title>
</head>

<body>
    <div class=' mx-auto p-12'>
        <div class='flex justify-between'>
            <h2 class="text-2xl font-bold mb-4">List Product</h2>
            <div>
                <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                    <a href="../category/list.category.php" class="text-white">List category</a>
                </button>

                <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                    <a href="../../client/home.php" class="text-white">Client</a>
                </button>

                <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                    <a href="../home.php" class="text-white">Admin Dashboard</a>
                </button>
            </div>
        </div>
        <table class="border-collapse border-2 border-gray-500">
            <thead>
                <tr>
                    <th class="border border-gray-500 px-4 py-2">ID</th>
                    <th class="border border-gray-500 px-4 py-2">name_product</th>
                    <th class="border border-gray-500 px-4 py-2">img</th>
                    <th class="border border-gray-500 px-4 py-2">price</th>
                    <th class="border border-gray-500 px-4 py-2">quantity</th>
                    <th class="border border-gray-500 px-4 py-2">description </th>
                    <th class="border border-gray-500 px-4 py-2">status</th>
                    <th class="border border-gray-500 px-4 py-2">category</th>
                    <th class="border border-gray-500 px-4 py-2">created_at</th>
                    <th class="border border-gray-500 px-4 py-2">update_at</th>
                    <th class="border border-gray-500 px-4 py-2">
                       <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                       <a href="add.product.php" class="text-white">Add</a></th>
                       </button>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $product) : ?>
                <tr>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['id_product']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['name_product']; ?></td>
                    <td class="border border-gray-500 px-4 py-2">
                        <img src="images/<?=$product['img']?>" width=80 alt="">
                    </td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['price']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['quantity']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['description']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['status']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['name_category']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['created_at']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $product['update_at']; ?></td>
                    <td class="border border-gray-500 px-4 py-2">
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 rounded">
                            <a href="update.product.php?id=<?=$product['id_product']?>" class="text-white">Edit</a>
                        </button>

                        <br>

                        <button class="bg-red-500 mt-1 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"
                            onclick='return confirm("Are you sure you want to delete?")'>
                            <a href="delete.product.php?id=<?=$product['id_product']?>" class="text-white">Xoá</a>
                        </button>

                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <br>
    </div>
</body>

</html>