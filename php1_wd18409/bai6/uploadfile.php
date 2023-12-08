<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $file = $_FILES['fileUpload'];
    //lấy ra tên file
    $file_name = $file['name'];
    //Di chuyển file vào thư mục upload
    $kt = move_uploaded_file($file['tmp_name'], "upload/" . $file_name);
    if ($kt) {
        echo "Upload thành công";
    } else {
        echo "Upload không thành công";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>
    <h2>Upload file</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Chọn file cần upload
        <br>
        <input type="file" name="fileUpload" id="">
        <br>
        <button type="submit">Upload</button>
    </form>
</body>

</html>