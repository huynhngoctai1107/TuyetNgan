<?php
include("pdo.php");
//lấy dữ liệu
         $tenloaisp = $_POST['tendanhmuc'];
      
        
if (isset($_POST['themdanhmuc'])) {

         $sql_them = "INSERT INTO loai(ten_loai) VALUE( '".$tenloaisp."')";
         mysqli_query($mysqli,$sql_them);
         header('Location: ../admin/index.php?action=danhmucsanpham&query=them');
 }elseif(isset($_POST['suadanhmuc'])){
   
         $sql_update = "UPDATE loai SET ten_loai='".$tenloaisp."' WHERE ma_loai=' $_GET[maloai]' ";
         mysqli_query($mysqli,$sql_update);
         header('Location: ../admin/index.php?action=danhmucsanpham&query=them');
    }else{
         $id = $_GET['maloai'];
         $sql_xoa = "DELETE FROM loai WHERE ma_loai ='".$id."'  ";
         mysqli_query($mysqli,$sql_xoa);
         header('Location: ../admin/index.php?action=danhmucsanpham&query=them');
   }
