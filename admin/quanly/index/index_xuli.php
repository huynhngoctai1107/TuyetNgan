<?php
    include(".././dao/pdo.php");
    if (isset($_GET['action']) && $_GET['query']) {
      $tam = $_GET['action'];
      $query = $_GET['query'];
    } else {
      $tam = '';
      $query = '';
    }
    if ($tam == "danhmucsanpham" && $query == 'them') {
      include("quanly/danhmuc/danhmuc_them.php");
      include("quanly/danhmuc/danhmuc_lietke.php");
    } else if ($tam == "danhmucsanpham" && $query == 'sua') {
      include("quanly/danhmuc/danhmuc_sua.php");
      include("quanly/danhmuc/danhmuc_lietke.php");
    } else if ($tam == "trangchu" && $query == 'them') {
      include("quanly/index/main.php");
    } else if ($tam == "sanpham" && $query == 'them') {
      include("quanly/sanpham/sanpham_them.php");
      include("quanly/sanpham/sanpham_lietke.php");
      //sửa
    } else if ($tam == "sanpham" && $query == 'sua') {
      include("quanly/sanpham/sanpham_sua.php");
      include("quanly/sanpham/sanpham_lietke.php");   

    } else if ($tam == "khach_hang" && $query == 'them') {
      include("quanly/nguoidung/nguoidung_lietke.php");
    } else if ($tam == "khach_hang" && $query == 'sua') {
      include("quanly/nguoidung/nguoidung_sua.php");
      include("quanly/nguoidung/nguoidung_lietke.php");
    //lien he
    }else if ($tam == "lienhe" && $query == 'them') {
       include("quanly/lienhe/lienhe_lietke.php");
      //donhang
    }else if ($tam == "hoadon" && $query == 'them') {
        include("quanly/donhang/donhang_them.php");
        include("quanly/donhang/donhang_lietke.php");
      } else if ($tam == "hoadon" && $query == 'sua') {
        include("quanly/donhang/donhang_sua.php");
        include("quanly/donhang/donhang_lietke.php");

      //tiemkiem 
    } else if ($tam == 'timkiem3' && $query == 'them') {
        include("quanly/donhang/donhang_timkiem.php");
      } 
      else if ($tam == 'timkiem2' && $query == 'them') {
       include("quanly/lienhe/lienhe_timkiem.php");

    } else if ($tam == 'timkiem2' && $query == 'them') {
      include("quanly/nguoidung/nguoidung_them.php");
      include("quanly/nguoidung/nguoidung_timkiem.php");
    } else if ($tam == 'timkiem' && $query == 'them') {
      include("quanly/sanpham/sanpham_timkiem.php");
    } else if ($tam == 'timkiem' && $query == 'sua') {
      include("quanly/sanpham/sanpham_sua.php");


     }
     else if ($tam == 'timkiem1' && $query == 'them') {
      include("quanly/danhmuc/danhmuc_timkiem.php");
    } else if ($tam == 'timkiem1' && $query == 'sua') {
      include("quanly/danhmuc/danhmuc_sua.php");
    }else if ($tam == 'timkiem4' && $query == 'them') {
      include("quanly/giamgia/giamgia_timkiem.php");
    } else if ($tam == 'giamgia' && $query == 'sua') {
      include("quanly/giamgia/giamgia_sua.php");
      include("quanly/giamgia/giamgia_lietke.php");
    } else if ($tam == 'giamgia' && $query == 'them') {
      include("quanly/giamgia/giamgia_them.php");
      include("quanly/giamgia/giamgia_lietke.php");
    }else if ($tam == 'binhluan' && $query == 'them') {
       include("quanly/binhluan/binhluan_lietke.php");
    }
