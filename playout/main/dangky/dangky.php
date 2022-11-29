 <form action="dao/nguoidung_xuli.php" method="POST">


     <span class="login100-form-title p-b-34 p-t-27">
         Đăng ký
     </span>

     <div class="wrap-input100 validate-input" data-validate="Full Name">
         <input class="input100" type="text" name="ho_ten" required placeholder="Họ và tên">
         <span class="focus-input100" data-placeholder="&#xf207;"></span>
     </div>

     <div class="wrap-input100">
         <h4 class="input100"><?php echo $email ?></h4>

         <input class="input100" type="hidden" name="email" value="<?php echo $email ?>">
         <span class="focus-input100" data-placeholder="&#xf207;"></span>
     </div>
     <div class="wrap-input100 validate-input" data-validate="Hình">
         <input class="input100" type="file" name="hinh" required placeholder="Hình Ảnh">
         <span class="focus-input100" data-placeholder="&#xf207;"></span>
     </div>



     <div class="wrap-input100 validate-input" data-validate="Enter password">
         <input class="input100" type="password" name="mat_khau" required placeholder="Mật khẩu">
         <span class="focus-input100" data-placeholder="&#xf191;"></span>
     </div>


     <div class="contact100-form-checkbox">
         <input class="input-checkbox100" id="ckb1" type="checkbox" required=" I Agree to terms of user ">
         <label class="label-checkbox100" for="ckb1">
             Tôi đồng ý <b>với các điều khoản của người dùng</b>
         </label>
     </div>

     <div class="container-login100-form-btn">
         <button type="submit" name="gui" class="login100-form-btn">
             Đăng ký
         </button>
     </div>

     <div class="text-center p-t-90">
         <a class="txt1" href="./login.php">
             -> Đăng nhập
         </a>
     </div>
 </form>