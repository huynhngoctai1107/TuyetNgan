<?php
include("../../config/config.php");
$nguoilienhe=$_POST['ten'];
$email = $_POST['email'];
$loinhan = $_POST['noidung'];
 
 
if (isset($_POST['gui'])) {
   
    $sql_themlienhe = "INSERT INTO lienhe(ten,email,noidung) VALUES('".$nguoilienhe."','".$email."','".$loinhan."')";
    mysqli_query($mysqli, $sql_themlienhe);
    header('Location: ../../../contact-us.php');

/*
} elseif (isset($_POST['suamonan'])) {
    $sql_update_sanpham = "UPDATE  monan SET tenmon='" . $tenmon . "' , loaimon='" . $loaimon . "' , hinh='" . $hinh . "', moto='" . $mota . "', chitiet='" . $chitiet . "', tieudemon='" . $tieudemon . "' , gioithieungangoi='" . $gioithieungangon . "', gioithieungangoi='" . $ngay . "' WHERE id_monan=' $_GET[idmonan]' ";
    mysqli_query($mysqli, $sql_update_sanpham);
    header('Location: ../../index.php?action=sanpham&query=them'); */
} else {
    $id = $_GET['idlienhe'];
    $sql_xoasp = "DELETE FROM  lienhe WHERE id_lienhe ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    header('Location: ../../index.php?action=lienhe&query=them');
}
