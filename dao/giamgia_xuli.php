<?php
include("pdo.php");
//lấy dữ liệu
         $ma = $_POST['magiamgia'];
         $tien = $_POST['sotiengiam'];
         $ngay = date("Y/m/d");
        
if (isset($_POST['themgiamgia'])) {

         $sql_them = "INSERT INTO giam_gia(giamgia,ma_giamgia,ngay) VALUE( '".$tien."','".$ma."','".$ngay."')";
         mysqli_query($mysqli,$sql_them);
         header('Location: ../admin/index.php?action=giamgia&query=them');
 }elseif(isset($_POST['suagiamgia'])){
   
         $sql_update = "UPDATE giam_gia SET giamgia='".$tien."',ma_giamgia='".$ma."' WHERE ma_gg=' $_GET[magg]' ";
         mysqli_query($mysqli,$sql_update);
         header('Location: ../admin/index.php?action=giamgia&query=them');
    }else{
         $id = $_GET['magg'];
         $sql_xoa = "DELETE FROM giam_gia WHERE ma_gg ='".$id."'  ";
         mysqli_query($mysqli,$sql_xoa);
         header('Location: ../admin/index.php?action=giamgia&query=them');
   }
?>