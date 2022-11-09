<?php
include ("../../config/config.php");
//lấy dữ liệu
         $tenloaisp = $_POST['tendanhmuc'];
         $id1= $_POST['id'];
        
if (isset($_POST['themdanhmuc'])) {

         $sql_them = "INSERT INTO loai(ma_loai,ten_loai) VALUE('".$id1."','".$tenloaisp."')";
         mysqli_query($mysqli,$sql_them);
         header('Location: ../../index.php?action=danhmucsanpham&query=them');
 }elseif(isset($_POST['suadanhmuc'])){
   
         $sql_update = "UPDATE loai SET ten_loai='".$tenloaisp."' WHERE ma_loai=' $_GET[maloai]' ";
         mysqli_query($mysqli,$sql_update);
         header('Location: ../../index.php?action=danhmucsanpham&query=them');
    }else{
         $id = $_GET['maloai'];
         $sql_xoa = "DELETE FROM loai WHERE ma_loai ='".$id."'  ";
         mysqli_query($mysqli,$sql_xoa);
         header('Location: ../../index.php?action=danhmucsanpham&query=them');
   }
?>