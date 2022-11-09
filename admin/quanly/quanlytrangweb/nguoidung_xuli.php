<?php
include("../../config/config.php");
$nguoidangky=$_POST['ho_ten'];
$matkhau = $_POST['mat_khau'];
$email = $_POST['email'];
$hinh = $_POST['hinh'];
$trangthai = $_POST['trangthai'];
$vaitro = $_POST['vaitro'];
 
 
if (isset($_POST['gui'])) {
   
    $sql_themnguoidung = "INSERT INTO khach_hang(ho_ten,mat_khau,email,hinh) VALUES('".$nguoidangky."','".$matkhau."','".$email."','".$hinh."')";
    mysqli_query($mysqli, $sql_themnguoidung);
    header('Location: ../../../dangky.php');


} elseif (isset($_POST['sua'])) {
    $sql_update_nguoidung = "UPDATE  khach_hang SET ho_ten='" . $nguoidangky . "' , mat_khau='" . $matkhau . "' , vai_tro='" . $vaitro . "', kich_hoat='" . $trangthai . "' WHERE ma_kh= ' $_GET[makh]' ";
    mysqli_query($mysqli, $sql_update_nguoidung);
    header('Location: ../../index.php?action=khach_hang&query=them'); 
} else {
    $id = $_GET['makh'];
    $sql_xoasp = "DELETE FROM  khach_hang WHERE ma_kh ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    header('Location: ../../index.php?action=khach_hang&query=them');
}
