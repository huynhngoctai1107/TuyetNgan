<?php
include("dao/pdo.php");
$thongbao = '';
$email = '';
$l = "playout/main/dangky/guiemail.php";
include("dao/otp_xuli.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Đăng ký | Cake</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

    <?php

    include("./playout/header/header.php");

    ?>



    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/util.css">
    <link rel="stylesheet" type="text/css" href="playout/main/vendor/main.css">
    <style>
        #an {
            display: none !important;
        }
    </style>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('playout/main/images/bg-01.jpg');">
            <div class="wrap-login100">

                <h3 style="color: white; text-align: center;"><?php echo $thongbao ?></h3>
                <?php
                 include("$l");


                ?>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="playout/main/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="playout/main/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="playout/main/vendor/bootstrap/js/popper.js"></script>
    <script src="playout/main/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="playout/main/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="playout/main/vendor/daterangepicker/moment.min.js"></script>
    <script src="playout/main/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="playout/main/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="playout/main/vendor/main.js"></script>

    <?php


    require("./playout/footer/footer.php");
    ?>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>