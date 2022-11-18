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
                VALUES ('" . $sdt . "', '" . $diachi . "', '" . $tongtien . "', '" . $ma_kh . "','" . $tg . "')";

            mysqli_query($mysqli, $insert_hoadon);
            $ma_hd = mysqli_insert_id($mysqli);
            foreach ($cart_data as $key => $value) {
                $ma_hh = $value['ma_hh'];
                $soluong = $value['soluong'];
                $don_gia = $value['don_gia'];
                $insert_chitiethoadon = "INSERT INTO chitiethoadon (ma_hd, ma_hh, soluong, gia)
                                                        VALUES ('" . $ma_hd . "', '" . $ma_hh . "', '" . $soluong . "', '" . $don_gia . "' )";
                mysqli_query($mysqli,  $insert_chitiethoadon);
            }
        }
    }

    header("location: ../lsdonhang.php");
}
