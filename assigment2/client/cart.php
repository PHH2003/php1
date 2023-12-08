<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Giỏ Hàng</title>
</head>
<body class="bg-gray-100">

  <div style='width:90%; margin: 0 auto;' class="p-4">
  <h2 class="text-4xl text-center text-blue-600 pb-4 font-bold">Cart Page</h2>
    <div class="flex justify-between">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="bg-white p-4 rounded shadow-md">
        <h2 class="text-lg font-semibold mb-2">Sản phẩm 1</h2>
        <p class="text-gray-500 mb-2">Mô tả sản phẩm 1...</p>
        <p class="text-blue-500 font-semibold">$19.99</p>
      </div>

      <div class="bg-white p-4 rounded shadow-md">
        <h2 class="text-lg font-semibold mb-2">Sản phẩm 2</h2>
        <p class="text-gray-500 mb-2">Mô tả sản phẩm 2...</p>
        <p class="text-blue-500 font-semibold">$29.99</p>
      </div>

      <div class="bg-white p-4 rounded shadow-md">
        <h2 class="text-lg font-semibold mb-2">Sản phẩm 2</h2>
        <p class="text-gray-500 mb-2">Mô tả sản phẩm 2...</p>
        <p class="text-blue-500 font-semibold">$29.99</p>
      </div>

    </div>

    <div class=" p-4 bg-white rounded shadow-md">
      <h2 class="text-xl font-semibold mb-4">Tổng Cộng</h2>
      <div class="flex justify-between items-center">
        <p class="text-gray-600">Tổng tiền:</p>
        <p class="text-blue-500 font-semibold">$49.98</p>
      </div>
      <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Thanh Toán</button>
    </div>
    </div>

  </div>

</body>
</html>
<?php
include_once "footer.php";
?>