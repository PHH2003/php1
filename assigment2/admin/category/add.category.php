<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../client/login.php');
}
include_once "../../connection.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name_category = $_POST['name_category'];
    $sql = "INSERT INTO category(name_category) VALUE ('$name_category')";
    $stmt = $conn->prepare($sql);
    $stmt -> execute();
    header('location:list.category.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Add Category</title>
</head>

<body>
    <div class='max-w-md mx-auto p-4'>
        <h2 class="text-2xl font-bold mb-4">Add Category</h2>
        <form action="" method="post" class="max-w-md mx-auto my-4 p-4 bg-white border rounded-md shadow-md">
            <label for="name_category" class="block text-sm font-medium text-gray-600">Name Category</label>
            <input required type="text" name="name_category" id="name_category" class="outline-none mt-1 p-2 border rounded-md w-full">

            <div class="mt-4 flex space-x-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white  rounded-md">Add</button>
                <a href="list.category.php" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Back to the List</a>
            </div>
        </form>
    </div>

</body>

</html>