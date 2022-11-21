<?php
include("pdo.php");

$tinhtrang = $_POST['tinhtrang'];
$tt = $_POST['thanhtoan'];

if (isset($_POST['sua'])) {
    $sql_update_hoadon = "UPDATE  hoadon SET tinhtrang='" .$tinhtrang. "',thanhtoan='" .$tt. "' WHERE ma_hd= ' $_GET[mahd]' ";
    mysqli_query($mysqli, $sql_update_hoadon);
    header('Location: ../admin/index.php?action=hoadon&query=them'); 
} else {
    $id = $_GET['mahd'];
    $sql_xoasp = "DELETE FROM chitiethoadon WHERE ma_hd ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    $sql_xoasp1 = "DELETE FROM hoadon WHERE ma_hd ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp1);
    header('Location: ../admin/index.php?action=hoadon&query=them');
}
?>