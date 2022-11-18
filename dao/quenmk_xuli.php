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
if (isset($_POST['quenmk'])) {
    include("pdo.php");
    $email = $_POST['email'];
    $mk = 0;
    $sql_quenmk = "SELECT * FROM khach_hang where email = '" . $email . "'  ";
    $query_quenmk = mysqli_query($mysqli, $sql_quenmk);

    while ($row_quenmk = mysqli_fetch_array($query_quenmk)) {


        $mk++;
    }

    if ($mk != 0) {
        // $mk = 0;
        $n = 6;
        $otp = (generateNumericOTP($n));
        // đổi mk
        $sql_update = "UPDATE khach_hang SET mat_khau='" . $otp . "' WHERE email='" . $email . "' ";
        mysqli_query($mysqli, $sql_update);
        // gửi email 
        $receiver = $email;
        $subject = "Tài Khoản ";
        $body = "Mật khẩu tài khoản của bạn là: " . $otp;
        $sender = "From: Ngan Cake Shopper";
        if (mail($receiver, $subject, $body, $sender)) {
            $thongbao = "Mật khẩu đã được cung cấp qua email<br> Vui lòng kiểm tra email của bạn !";
        } else {
            $thongbao = "Email gửi thất bại";
        }
    } else {
        $thongbao = "Email không khớp với email đăng ký";
    }
}
?>

 





