<?php
include("pdo.php");
if (isset($_POST['apdung'])) {
    $ma = $_POST['voucher'];
        $sql = "SELECT * FROM giam_gia WHERE ma_giamgia=   '" . $ma . "' ";
        $voucher = mysqli_query($mysqli, $sql);
        $c = 0;

        while ($row = mysqli_fetch_array($voucher)) {
            $c++;
            $b =  $row['giamgia'];
        }
        if ($c == 0) {
            $giamgia = 0;
            $thongbao ="Áp dụng mã không thành công";
        } else {
            $giamgia = $b;
            $thongbao ="Áp dụng mã thành công";
        }
}
?>