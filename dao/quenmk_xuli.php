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

    $email = $_POST['email'];
    $mk = 0;
    $sql_quenmk = "SELECT * FROM khach_hang where email = '" . $email . "'  ";
    $query_quenmk = mysqli_query($mysqli, $sql_quenmk);
?>

<?php
    while ($row_quenmk = mysqli_fetch_array($query_quenmk)) {
?>
<?php 
 $mk  ++;
?>
<?php }
    ?>
<?php
    if ($mk !=0) {
       // $mk = 0;
        $n = 6;
        $otp = (generateNumericOTP($n));
        // đổi mk
        $sql_update = "UPDATE khach_hang SET mat_khau='".$otp."' WHERE email='".$email."' ";
        mysqli_query($mysqli,$sql_update);
        // gửi email 
        $receiver = $email;
        $subject = "Tài Khoản " ;
        $body = "Mật khẩu tài khoản của bạn là: " . $otp    ;
        $sender = "From:taihnpc04370@fpt.edu.vn";
        if (mail($receiver, $subject, $body, $sender)) {
            header('Location: ../login.php');
        } else {
            header('Location: ../quenmatkhau.php');
        }
    } else {
        header('Location: ../quenmatkhau.php');
    }



?>

 





