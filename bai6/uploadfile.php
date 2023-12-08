<?php
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $file = $_FILES['fileUpload'];
        // Lay ten file
        $file_name = $file['name'];
        // Di chuyen file vaof thu muc upload
        $kt = move_uploaded_file($file['tmp_name'], "upload/".$file_name);
        if($kt){
            echo "Upload thanhf coong";
        }
        else{
            echo "Upload thaats baij";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Upload file</h2>
    <form action="" method="post" enctype="multipart/form-data">
        chọn file cần upload       
        <br>
        <input type="file" name="fileUpload">
        <br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>