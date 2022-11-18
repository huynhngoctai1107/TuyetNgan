<?php

session_start();

if (isset($_POST['thanhtoan'])) {
    include("pdo.php");
    if (isset($_SESSION['dangnhap'])) {
        $ma_kh = $_POST['ma_kh'];
        $tongtien = $_POST['tongtien'];
        $email = $_SESSION['dangnhap'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $tg = date("Y/m/d");
        if (isset($_COOKIE['cart'])) {
            $cookie_data = $_COOKIE['cart'];

            $cart_data = json_decode($cookie_data, true);

            $insert_hoadon = "INSERT INTO hoadon (sdt, diachi, tongtien, ma_kh,tgdat)
                VALUES ('$sdt', '$diachi', '$tongtien', '$ma_kh','$tg')";
            if ($mysqli->query($insert_hoadon)) {
                $ma_hd = $mysqli->insert_id;
                foreach ($cart_data as $key => $value) {
                    $ma_hh = $value['ma_hh'];
                    $soluong = $value['soluong'];
                    $don_gia = $value['don_gia'];
                    $insert_chitiethoadon = "INSERT INTO chitiethoadon (ma_hd, ma_hh, soluong, gia)
                                                        VALUES ('$ma_hd', '$ma_hh', '$soluong', '$don_gia' )";
                    // if ($mysqli->query($insert_chitiethoadon)) {
                    //     setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
                        
                    //     if (isset($_COOKIE['cart'])) {
                    //         setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
                            
                    //     }
                        
                        
                    // }
                }
            }
        }
    }

header("location: ../lsdonhang.php")   ; 
}
 

