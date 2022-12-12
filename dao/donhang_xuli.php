<?php
include("pdo.php");


if (isset($_POST['sua'])) {
    $tinhtrang = $_POST['tinhtrang'];
    $tt = $_POST['thanhtoan'];
    $sql_update_hoadon = "UPDATE  hoadon SET tinhtrang='" . $tinhtrang . "',thanhtoan='" . $tt . "' WHERE ma_hd= ' $_GET[mahd]' ";
    mysqli_query($mysqli, $sql_update_hoadon);
    header('Location: ../admin/index.php?action=hoadon&query=them');
} else if (isset($_POST['huydon'])) {
    $id = $_GET['id'];
    $sql_xoasp = "DELETE FROM chitiethoadon WHERE ma_hd ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    $sql_xoasp1 = "DELETE FROM hoadon WHERE ma_hd ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp1);
    header('Location: ../donhang.php');
} else {
    $id = $_GET['mahd'];
    $sql_xoasp = "DELETE FROM chitiethoadon WHERE ma_hd ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    $sql_xoasp1 = "DELETE FROM hoadon WHERE ma_hd ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp1);
    header('Location: ../admin/index.php?action=hoadon&query=them');
}
