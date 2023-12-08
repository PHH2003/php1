<?php
//cho 1 danh sách sinh viên
$sinhvien = [
    ['mssv' => 'PH12345', 'hoten' => 'Nguyễn Văn An', 'email' => 'annvph12345@fpt.edu.vn', 'diachi' => 'Hà Nội'],
    ['mssv' => 'PH12346', 'hoten' => 'Trinh Văn Quyết', 'email' => 'quyettvph12346@fpt.edu.vn', 'diachi' => 'Nghệ An'],
    ['mssv' => 'PH12347', 'hoten' => 'Đào Thị Trinh', 'email' => 'trinhdtph12347@fpt.edu.vn', 'diachi' => 'Nam Định'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>

<body>
    <h1>Danh sách sinh viên</h1>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>MSSV</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Địa chỉ</th>
        </tr>
        <?php foreach ($sinhvien as $index => $sv) : ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $sv['mssv'] ?></td>
                <td><?php echo $sv['hoten'] ?></td>
                <td><?php echo $sv['email'] ?></td>
                <td><?php echo $sv['diachi'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>