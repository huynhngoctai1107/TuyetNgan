<?php
include("../../config/config.php");
 
    $id = $_GET['mabl'];
    $sql_xoasp = "DELETE FROM binh_luan WHERE ma_bl ='" . $id . "'  ";
    mysqli_query($mysqli, $sql_xoasp);
    header('Location: ../../index.php?action=binhluan&query=them');
?>
