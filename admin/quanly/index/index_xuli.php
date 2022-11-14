<?php
    include("../admin/config/config.php");
    if (isset($_GET['action']) && $_GET['query']) {
      $tam = $_GET['action'];
      $query = $_GET['query'];
    } else {
      $tam = '';
      $query = '';
    }
    if ($tam == "danhmucsanpham" && $query == 'them') {
      include("quanly/quanlytrangweb/danhmuc_them.php");
      include("quanly/quanlytrangweb/danhmuc_lietke.php");
    } else if ($tam == "danhmucsanpham" && $query == 'sua') {
      include("quanly/quanlytrangweb/danhmuc_sua.php");
      include("quanly/quanlytrangweb/danhmuc_lietke.php");
    } else if ($tam == "trangchu" && $query == 'them') {
      include("./playout/main/main.php");
    } else if ($tam == "sanpham" && $query == 'them') {
      include("quanly/quanlytrangweb/sanpham_them.php");
      include("quanly/quanlytrangweb/sanpham_lietke.php");
      //sửa
    } else if ($tam == "sanpham" && $query == 'sua') {
      include("quanly/quanlytrangweb/sanpham_sua.php");
      include("quanly/quanlytrangweb/sanpham_lietke.php");
    } else if ($tam == "nguoidung" && $query == 'them') {

      //nguoidung
    } else if ($tam == "khach_hang" && $query == 'them') {
      
      include("quanly/quanlytrangweb/nguoidung_lietke.php");
    } else if ($tam == "khach_hang" && $query == 'sua') {
      include("quanly/quanlytrangweb/nguoidung_sua.php");
      include("quanly/quanlytrangweb/nguoidung_lietke.php");

    //lien he
    }else if ($tam == "lienhe" && $query == 'them') {
      include("quanly/quanlytrangweb/lienhe_them.php");
      include("quanly/quanlytrangweb/lienhe_lietke.php");
    } else if ($tam == 'timkiem2' && $query == 'them') {
      include("quanly/quanlytrangweb/lienhe_them.php");
      include("quanly/quanlytrangweb/lienhe_timkiem.php");

    } else if ($tam == 'timkiem2' && $query == 'them') {
      include("quanly/quanlytrangweb/nguoidung_them.php");
      include("quanly/quanlytrangweb/nguoidung_timkiem.php");
    } else if ($tam == 'timkiem' && $query == 'them') {
      include("quanly/quanlytrangweb/sanpham_timkiem.php");
    } else if ($tam == 'timkiem' && $query == 'sua') {
      include("quanly/quanlytrangweb/sanpham_sua.php");


      // danh muc
    } else if ($tam == 'timkiem1' && $query == 'them') {

      include("quanly/quanlytrangweb/danhmuc_timkiem.php");
    } else if ($tam == 'timkiem1' && $query == 'sua') {
      include("quanly/quanlytrangweb/danhmuc_sua.php");
    }

    ?>