    <!--===============================================================================================-->
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
                <form class="login100-form validate-form" action="" method="POST">


                    <span class="login100-form-title p-b-34 p-t-27">
                        forget password
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="email" username" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>


                    <div class="container-login100-form-btn">
                        <button type="submit" name="qmk" class="login100-form-btn">
                            submit
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="../Eshopper/login.php">
                            Sign In
                        </a>
                    </div>
                </form>
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






    if (isset($_POST['qmk'])) {
        function generateNumericOTP($n)
        {

            $generator = "1357902468";

            $result = "";

            for ($i = 1; $i <= $n; $i++) {
                $result .= substr($generator, (rand() % (strlen($generator))), 1);
            }

            // Return result
            return $result;
        }

    
    
    }
    ?>