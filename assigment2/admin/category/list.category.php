<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../client/login.php');
}
include_once '../../connection.php';
$sql = "SELECT * FROM category";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>List Category</title>
</head>

<body>
    <div class='max-w-md mx-auto p-4'>
        <h2 class="text-2xl font-bold mb-4">List Category</h2>
        <table class="border-collapse border-2 border-gray-500">
            <thead>
                <tr>
                    <th class="border border-gray-500 px-4 py-2">ID</th>
                    <th class="border border-gray-500 px-4 py-2">name_category</th>
                    <th class="border border-gray-500 px-4 py-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                            <a href="add.category.php" class="text-white">+Category</a>
                    </th>
                    </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $category) : ?>
                <tr>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $category['id_category']; ?></td>
                    <td class="border border-gray-500 px-4 py-2"><?php echo $category['name_category']; ?></td>
                    <td class="border border-gray-500 px-4 py-2">
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 rounded">
                            <a href="update.category.php?id=<?=$category['id_category']?>" class="text-white">Edit</a>
                        </button>

                        <button class="bg-red-500 mt-1 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"
                            onclick='return confirm("Are you sure you want to delete?")'>
                            <a href="delete.category.php?id=<?=$category['id_category']?>" class="text-white">Xoá</a>
                        </button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <br>
        <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
            <a href="../product/list.product.php" class="text-white">List product</a>
        </button>

        <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
            <a href="../home.php" class="text-white">Dashboard</a>
        </button>

        <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
            <a href="../../client/home.php" class="text-white">Client</a>
        </button>
    </div>

</body>

</html>