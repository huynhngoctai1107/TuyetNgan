<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
  header('Location: login.php');
}
 
?>


<?php

// thêm vào giỏ hàng 
if (isset($_POST['themgiohang'])) {
    include("dao/pdo.php");

    $id_sp = isset($_GET['id']) ? $_GET['id'] : '';
    $sanpham = $mysqli->query("SELECT * FROM hang_hoa where  ma_hh = $id_sp ");
    $sp = $sanpham->fetch_assoc();
    $ten = $sp['ten_hh'];
    $hinh = $sp['hinh'];
    $don_gia = $sp['don_gia'];

    if (isset($_COOKIE['cart'])) {
      
        $cookie_data = $_COOKIE['cart'];

        // chuyển string thành array 
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }

    $id_sp_ds = array_column($cart_data, 'ma_hh');

    // kiểm tra id_sp có tồn tại trong cookie cart chưa 
    if (in_array($id_sp, $id_sp_ds)) {
        foreach ($cart_data as $key => $value) {
            // nếu có thì tăng có lượng sản phẩm 

            if ($cart_data[$key]['ma_hh'] == $id_sp) {
                $cart_data[$key]['soluong'] = $cart_data[$key]['soluong'] + 1;
            }
        }
    } else {
        // nếu chưa có thì thêm vào cookie cart 
        $product_array = array(
            'ma_hh' => $id_sp,
            'ten_hh' => $ten,
            'don_gia' => $don_gia,
            'soluong' => 1,
            'hinh' => $hinh
        );
        $cart_data[] = $product_array;
    }

    // chuyển array thành string để lưu vào cookie cart 
    $product_data = json_encode($cart_data);

    // lưu cookie 
    setcookie('cart', $product_data, time() +  3600 * 24 * 30 * 12,'/');


     header('location: ../../../cart.php');
}

// sửa số lượng sản phẩm trong giỏ hàng 
if (isset($_POST['sua'])) {

    $id_sp = $_POST['ma_hh'];
    $soluong = $_POST['soluong'];
    $ten_hh = $_POST['ten_hh'];
    $hinh = $_POST['hinh'];
    $don_gia = $_POST['don_gia'];
    if (isset($_COOKIE['cart'])) {
        $cookie_data = $_COOKIE['cart'];
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }

    $id_sp_ds = array_column($cart_data, 'ma_hh');

    if (in_array($id_sp, $id_sp_ds)) {
        foreach ($cart_data as $key => $value) {
            if ($cart_data[$key]['ma_hh'] == $id_sp) {
                $cart_data[$key]['soluong'] =  $soluong;
            }
        }
    } else {
        $product_array = array(
            'ma_hh' => $id_sp,
            'ten_hh' => $ten_hh,
            'don_gia' => $don_gia,
            'soluong' => 1,
            'hinh' => $hinh
        );
        $cart_data[] = $product_array;
    }

    $product_data = json_encode($cart_data);
    
    setcookie('cart', $product_data, time() + 3600 * 24 * 30 * 12,'/');

    header('location: ../../../cart.php');
}

// xóa sản phẩm trong giỏ hàng 
if (isset($_POST['xoa'])) {
if (isset($_COOKIE['cart'])) {
        $cookie_data = $_COOKIE['cart'];
        $cart_data = json_decode($cookie_data, true);
        foreach ($cart_data as $key => $value) {
            if ($cart_data[$key]['ma_hh'] == $_POST['ma_hh']) {
                unset($cart_data[$key]);
                $product_data = json_encode($cart_data);

                setcookie("cart", $product_data, time() +  3600 * 24 * 30 * 12,'/');
            }
        }
    }
    header('location: ../../../cart.php');
}

// xóa cookie giỏ hàng
if (isset($_POST['xoatatca'])) {
    if (isset($_COOKIE['cart'])) {
        setcookie("cart", "", time() -  3600 * 24 * 30 * 12,'/');
    }
    header('location: ../../../cart.php');
}
