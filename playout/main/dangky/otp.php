<form action="" method="POST">


    <span class="login100-form-title p-b-34 p-t-27">
        Xác nhận mã OTP
    </span>

    <div class="wrap-input100 validate-input" data-validate="Full Name">
        <input class="input100" type="text" name="otp" required placeholder="Mã OTP">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>
    <input class="input100" type="hidden" name="email1" value="<?php echo $email ?>">

    <div class="container-login100-form-btn">
        <button type="submit" name="otp1" class="login100-form-btn">
            Xác Nhận
        </button>
    </div>
    <div class="text-center p-t-90">

    </div>
</form>