<?php
include("dao/pdo.php");
 

$binhluan = $_POST['noidung'];
$mkh = $_POST['ma_kh'];
$mhh = $_POST['ma_hh'];
$ngay= date("Y/m/d");
 
     
if (isset($_POST['guibinhluan'])) {

         $sql_them = "INSERT INTO binh_luan(noi_dung,ngay_bl,ma_hh,ma_kh) VALUE('".$binhluan."','".$ngay."','".$mhh."','".$mkh."')";
         mysqli_query($mysqli,$sql_them);
         header('Location: ../../index.php');
 } else{
    $id = $_GET['mabl'];
    $sql_xoasp = "DELETE FROM binh_luan WHERE ma_bl ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    header('Location: ../../index.php?action=binhluan&query=them');
}
?>