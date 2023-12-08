<?php
include_once 'header.php';
    
    session_start();
    include_once '../connection.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy dữ liệu từ form
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Truy vấn kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM user WHERE user_name = :username AND passwork = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    
        // Kiểm tra kết quả truy vấn
        if ($stmt->rowCount() > 0) {
            // Đăng nhập thành công, lưu thông tin người dùng vào session
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['user'] = $user;
            // Chuyển hướng đến trang admin dashboard sau khi đăng nhập thành công
            header('location: ../admin/home.php');
            exit();
        } else {
            $thongbao = "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.";
        }
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>

<div style='width:90%; margin: 0 auto;' class="flex min-h-full flex-col justify-center px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>
  <?php if (isset($thongbao)) : ?>
    <div style="color: red;"><?= $thongbao ?></div>
<?php endif; ?>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">User_name</label>
        <div class="mt-2">
          <input id="email" name="username" type="text" autocomplete="email" required class="p-4 outline-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="p-4 outline-none lock w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
    </p>
  </div>
</div>

</body>
</html>

<?php
include_once 'footer.php';
?>