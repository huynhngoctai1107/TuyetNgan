<?php
function generateNumericOTP($n)
{
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }
    return $result;
}

?>


<?php

include("pdo.php");
if (isset($_POST['guiotp'])) {
    $email = $_POST['email'];
    $n = 6;
    $otp = (generateNumericOTP($n));
    $receiver = $email;
    $subject = "Tài Khoản ";
    $body = "Mã OTP của bạn là: " . $otp;
    $sender = "From: Ngan Cake Shopper";
    if (mail($receiver, $subject, $body, $sender)) {
        $sql_otp = "INSERT INTO otp(ma) VALUES('" . $otp . "')";
        mysqli_query($mysqli, $sql_otp);
        $thongbao = "Gửi mã OTP thành công !";
        $l = "playout/main/dangky/otp.php";
    } else {
        $thongbao = "Gửi mã OTP không thành công";
    }
} else if (isset($_POST['otp1'])) {
    $otp = $_POST['otp'];
    $email1 = $_POST['email'];
    $i = 0;
    $sql_otp = "SELECT * FROM otp where ma = '" . $otp . "'  ";
    $query_otp = mysqli_query($mysqli, $sql_otp);

    while ($row_otp = mysqli_fetch_array($query_otp)) {
        $i++;
    }
    $email = $email1;
    if ($i != 0) {

        $l = "playout/main/dangky/dangky.php";
    } else {

        $thongbao = "Nhập mã OTP không chính xác !";
        $l = "playout/main/dangky/otp.php";
    }
}



?>