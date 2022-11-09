<?php
$a  = $_SESSION['dangnhap'];
$mysqli = new mysqli("localhost", "root", "", "du_an_mau");
$sql_accout = "SELECT * FROM khach_hang where  khach_hang.email = '" . $a . "'  ";
$query_accout = mysqli_query($mysqli, $sql_accout);
 
?>


  
<div class="noidung" style="width: 70%; margin:60px 15% 100px 15% ; height: auto;  ">
    <?php
    while ($row_accout = mysqli_fetch_array($query_accout)) {
    ?>
      

        <div class="hinhanh" style="width: 50%; margin-left: 25%; margin-top: 50px; display: flex; align-items: center; flex-direction: column;">
            <img src="./images/<?php echo $row_accout['hinh'] ?>" width="210px" height="210px" style=" border-radius: 210px;" alt="">
            <h3 style="text-align: center; font-style: italic;"> <?php echo $row_accout['ho_ten'] ?></h3>
        </div>
        <div class="thongtin" style="width: 100%; margin-top: 50px;">
            <h3>Thông tin chi tiết:</h3>
            <h5>Mã số tài khoản: <?php echo $row_accout['ma_kh'] ?></h5>

            <?php
            if ($row_accout['vai_tro'] == 0) {
                $b = "Người dùng";
            } else {
                $b = "Quản trị viên";
            }

            ?>
            <h5>Loại tài khoản: <?php echo $b ?></h5>
            <h3>Quyền của người dùng:</h3>
            <p onclick="doihinh()">Đổi hình ảnh tài khoản</p>
            <p onclick="doiten()">Đổi tên tài khoản</p>
            <p onclick="doimk()">Đổi mật khẩu</p>
            <p onclick="donhang()">Lịch sử đơn hàng</p>
            <a  href="./taikhoan_xuli.php?id=<?php echo $row_accout['ma_kh'] ?>" style="color: black;">Đăng xuất tài khoản</a>


        </div>


        <form action="./taikhoan_xuli.php?id=<?php echo $row_accout['ma_kh'] ?>" id="doihinh" method="post" class="form">
            <h4 style=" margin-left: 80%; background-color: #fe980f; color: white;width: 10%; height: 30px; display: flex; justify-content: center; align-items: center; border-radius: 20px    ;" onclick="dong()">Đóng</h4>

            <h3>Đổi hình đại diện</h3>
            <br>
            <input type="file" name="hinh" value="<?php $row_accout['hinh'] ?>">
            <br>
            <br>
            <button type="submit" class="button-62" role="button" name="gui">Đổi hình đại diện</button>


        </form>
        <form action="./taikhoan_xuli.php?id=<?php echo $row_accout['ma_kh'] ?>" id="doiten" method="post" class="form">
            <h4 style=" margin-left: 80%; background-color: #fe980f; color: white;width: 10%; height: 30px; display: flex; justify-content: center; align-items: center; border-radius: 20px    ;" onclick="dong()">Đóng</h4>

            <h3>Đổi tên tài khoản</h3>
            <br>
            <input type="text" name="ten" style="width: 300px; height:50px ; " value="<?php echo $row_accout['ho_ten'] ?>">
            <br>
            <br>
            <button type="submit" class="button-62" role="button" name="suaten">Đổi tên tài khoản</button>


        </form>
        <form action="./taikhoan_xuli.php?id=<?php echo $row_accout['ma_kh'] ?>" id="doimk" method="post" class="form">
            <h4 style=" margin-left: 80%; background-color: #fe980f; color: white;width: 10%; height: 30px; display: flex; justify-content: center; align-items: center; border-radius: 20px    ;" onclick="dong()">Đóng</h4>

            <h3>Đổi mật khẩu</h3>
            <br>
            <input type="text" name="matkhauht" style="width: 300px; height:50px ; " placeholder="Nhập lại mật khẩu cũ" >
            <input type="text" name="matkhaumoi" style="width: 300px; height:50px ; " placeholder="Nhập mật khẩu mới"  >
            <input type="text" name="matkhaunl" style="width: 300px; height:50px ; " placeholder="Nhập lại mật khẩu mới"  >
            <br>
            <br>
            <button type="submit" class="button-62" role="button" name="suamk">Đổi mật khẩu</button>


        </form>



    <?php }
    ?>
 

</div>
<style>
    .form {
        position: relative;
        bottom: 300px;
        width: 100%;

        padding: 5%;
        z-index: 1000;
        height: 500px;



        background-color: white;


    }

    #doihinh,
    #doiten,
    #doimk {
        display: none;
    }



    .button-62 {
        background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
        border: 0;
        border-radius: 12px;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        padding: 0 1rem;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
    }

    .button-62:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button-62:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    h5 {
        font-style: italic;
    }

    .thongtin p,a {
        font-style: italic;
        font-weight: 500;
        font-size: 18;
    }

    .thongtin p:hover{
        font-size: 20px;
        color: #fe980f;
    }
    a:hover{
        font-size: 20px;
        color: #fe980f !important;
    }
</style>
<script>
    function doihinh() {


        document.getElementById("doihinh").style.display = "block";




    }

    function doiten() {


        document.getElementById("doiten").style.display = "block";




    }

    function doimk() {


        document.getElementById("doimk").style.display = "block";




    }

    function dong() {

        document.getElementById("doihinh").style.display = "none";
        document.getElementById("doiten").style.display = "none";
        document.getElementById("doimk").style.display = "none";
    }
</script>