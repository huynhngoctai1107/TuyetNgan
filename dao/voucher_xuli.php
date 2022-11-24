<?php
 include("pdo.php");
if (isset($_POST['apdung'])) {

    $ma = $_POST['voucher'];
    $sql = "SELECT * FROM giam_gia WHERE ma_giamgia=   '" . $ma . "' ";
    $voucher = mysqli_query($mysqli, $sql);
    $c = 0;
    while ($row = mysqli_fetch_array($voucher)) {
        $c++;
        $id = $row['ma_gg'];
        $b =  $row['giamgia'];
        $dieukien = $row['dieukien'];
    }
    if ($c != 0) {
        if ($tt >= $dieukien ) {
            $thongbao = "* Áp dụng mã thành công !";
            $id  = $id;
            $giamgia = $b;
        } else {
            $giamgia = 0;
            $id = '';
            $thongbao = "* Áp dụng mã không thành công, số tiền chưa đủ điều kiện !";
        }
    } else {
        $giamgia = 0;
        $id = '';
        $thongbao = "* Áp dụng mã không thành công, sai mã giảm giá !";
    }
}
