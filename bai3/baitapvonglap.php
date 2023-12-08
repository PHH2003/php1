<!-- B1: tính tổng của một dãy số 1 + 3 + 5 +7 + ... +101
B2: Cho 1 dssv bao gồm có các trường là: mssv, hoten, email, avatar, địa chỉ.
- sử dụng mảng để tạo 1 dssv với các trường như trên
- hiển thị danh sách sinh viên đó bao gồm cả avatar -->
<!-- Bài 1 -->
<?php
    echo "Bài 1:";
    $tong = 0;
    for($i = 1; $i<=101; $i++){
        if($i%2 !== 0){
            $tong += $i;
        }
    }    
    echo "<br>Tổng các số lẻ từ 1 đến 101 là: <strong>$tong</strong>";  
    echo "<br>Bài 2:";
    
?>
<!-- Bài 2 -->
<?php
    $sinhvien = [
        [
            'mssv' => 'PH12345',
            'hoten' => 'Bùi Xuân Huấn', 
            'email' => 'huanbxph12345@fpt.edu.vn',
            'avatar' => 'https://kenh14cdn.com/2020/6/11/photo-1-15918652471211649560662.jpg' ,
            'diachi'=>'Yên Bái'],
        [
            'mssv' => 'PH12346',
            'hoten' => 'Tran Thi Ngoc Trinh',
            'email' => 'trinhttnph12346@fpt.edu.vn',
            'avatar' => 'https://vtv1.mediacdn.vn/thumb_w/640/562122370168008704/2023/10/19/ngoc-trinh-16977123656701928692535.jpg' ,
            'diachi'=>'Trà Vinh'
        ],
        [
            'mssv' => 'PH12347',
            'hoten' => 'Trịnh Văn Quyết',
            'email' => 'quyettvph12347@fpt.edu.vn',
            'avatar' => 'https://nhaquanly.vn/uploads/images/2022/03/30/trinh-van-quyet-khi-bi-bat-1648604073.jpg' ,
            'diachi'=>'Vĩnh Phúc'
        ],
        [
            'mssv' => 'PH12348',
            'hoten' => 'Nguyễn Văn Dũng',
            'email' => 'dungnvph12348@fpt.edu.vn',
            'avatar' => 'https://danviet.mediacdn.vn/296231569849192448/2021/5/21/dt2-16215989139121615126165.png' ,
            'diachi'=>'Hòa Bình'
        ],

    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <form action="" method="post">
        <table border="1">
        <tr>
        <th colspan="5">DANH SÁCH SINH VIÊN</th>
    </tr>
    <tr>
        <th>STT</th>
        <th>MSSV</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Địa chỉ</th>
        
    </tr>
        <?php foreach($sinhvien as $index => $sv) : ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $sv['mssv'] ?></td>
                <td><?php echo $sv['hoten'] ?></td>
                <td><?php echo $sv['email'] ?></td>
                <td><?php echo "<img style='width: 250px; height: 200px; padding:5px;' src={$sv['avatar']}>" ?></td>
                <td><?php echo $sv['diachi'] ?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </form>
</body>
</html>
