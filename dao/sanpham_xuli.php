<?php
include("pdo.php");

$tensp = $_POST['tensanpham'];
$hinh = $_POST['hinhanh'];
$ngay = date("Y/m/d");
$dacbiet = $_POST['dacbiett'];
$mota = $_POST['mota'];
 
$gia = $_POST['gia'];
 
$maloai = $_POST['maloaihang'];

if (isset($_POST['themsanpham'])) {

    $sql_themsp = "INSERT INTO hang_hoa(ma_loai,ten_hh,hinh,don_gia,ngay_nhap,dac_biet,mo_ta) VALUE('" . $maloai . "','" . $tensp . "','" . $hinh . "','" . $gia . "', '" . $ngay . "','" . $dacbiet . "','" . $mota . "')";
    mysqli_query($mysqli, $sql_themsp);
    header('Location:  ../admin/index.php?action=sanpham&query=them');
} elseif (isset($_POST['sua'])) {
    $sql_update_sanpham = "UPDATE hang_hoa SET ten_hh='" . $tensp . "' , hinh='" . $hinh . "' , ma_loai='" . $maloai. "', don_gia='" . $gia . "', mo_ta='" . $mota . "', dac_biet='" . $dacbiet  . "'   WHERE ma_hh=' $_GET[maloai]' ";
    mysqli_query($mysqli, $sql_update_sanpham);
    header('Location:  ../admin/index.php?action=sanpham&query=them');
} else {
    $id = $_GET['maloai'];
    $sql_xoasp = "DELETE FROM hang_hoa WHERE ma_hh ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    header('Location:  ../admin/index.php?action=sanpham&query=them');
}
