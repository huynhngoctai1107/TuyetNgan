<style>
    #binhluan {
        width: 70%;
        height: auto;
        margin-top: 150px;
        margin-left: 15%;
    }

    .bl h4 {
        font-style: italic;
    }

    .bl h4:hover {
        color: #fdb45e;
    }

    #binhluan form {
        margin-left: 10%;
        width: 80%;
        display: flex;
        align-items: center;
        flex-direction: column;
        height: auto;
    }

    #binhluan2 {
        background-color: #EEEEEE;
        height: auto;
        margin: 15px 0px;
        padding: 10px ;
        width: 100%;
      
    }

    #binhluan input {
        height: 50px;
    }

    p {
        text-align: justify !important;
    }

    #binhluan input,
    textarea {
        box-shadow: 3px 2px 0.5px black;
        padding-left: 10px;
        border: none;

        margin-top: 10px;
        width: 70%;
    }



    .button {
        margin-top: 20px;
        width: 200px;
        height: 50px;

        color: transparent;
        padding: 40px 80px;
        font-size: 28px;
        font-family: sans-serif;
        letter-spacing: 5px;
        transition: all 0.5s;
        position: relative;
    }

    .button:before {
        content: "Gửi Đi Trời";
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background: #080c50;
        font-size: 28px;
        font-family: sans-serif;
        letter-spacing: 5px;
        transition: all 1s;
        height: 100%;
        width: 100%;
        position: absolute;
        transform: scale(0) rotatey(0);
        opacity: 0;
    }

    .button:hover:before {
        transform: scale(1) rotatey(360deg);
        left: 0;
        opacity: 1;
    }

    .button:after {
        content: "Gửi Bình Luận";
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background: #080c50;
        font-size: 28px;
        top: 0;
        left: 0;
        font-family: sans-serif;
        letter-spacing: 5px;
        transition: all 1s;
        height: 100%;
        width: 100%;
        position: absolute;
        transform: scale(1) rotatey(0);
        opacity: 1;
    }

    .button:hover:after {
        transform: scale(0) rotatey(360deg);
        left: -100%;

    }

    .noidung1 {
        width: 100%;
        height: auto;
        padding: 100px 0px !important;
    }

    .sanpham1 {

        width: 70%;
        margin-left: 15%;
    }
</style>
s
<?php
// tính số lượt xem
$mysqli = new mysqli("localhost", "root", "", "du_an_mau");
$sql_sanpham = "SELECT * FROM hang_hoa where ma_hh = '$_GET[id]'  ORDER BY hang_hoa.ma_hh ASC";
$result = mysqli_query($mysqli, $sql_sanpham);
$soluotxem = 1;
$data = mysqli_fetch_assoc($result);
$soluotxem += $data['so_luot_xem'];
$sql_update_sanpham = "UPDATE hang_hoa SET so_luot_xem='" . $soluotxem . "' WHERE ma_hh=' $_GET[id]' ";
mysqli_query($mysqli, $sql_update_sanpham);

?>


<div class="noidung" style="height: auto; width:65% ; margin-left: 17.5%; margin-bottom: 150px;">
    <h1 style="margin: 30px 0px ;">Thông tin sản phẩm</h1>
    <?php
    $mysqli1 = new mysqli("localhost", "root", "", "du_an_mau");
    $sql_sp = "SELECT * FROM hang_hoa,loai  where hang_hoa.ma_loai = loai.ma_loai and  ma_hh = '$_GET[id]'  ORDER BY hang_hoa.ma_hh ASC";
    $query_sp = mysqli_query($mysqli1, $sql_sp);
    ?>


    <?php
    while ($row_sp = mysqli_fetch_array($query_sp)) {
    ?>

        <form action="" style="width:100% ; height: auto; display: flex; justify-content: space-between; ">
            <div class="left" style="width:40% ; height: auto; ">
                <img src="./images/<?php echo $row_sp['hinh'] ?>" width="100%" height="300" alt="" />

            </div>
            <div class="right" style="width: 58% ;height: auto;">
                <h3><?php echo $row_sp['ten_hh'] ?></h3>
                <h5>Loại sản phẩm: <?php echo $row_sp['ten_loai'] ?></h5>
                <h5 style=" font-style: italic;">Sản phẩm bán ngày: <b style="color: red; font-weight: none;"><?php echo $row_sp['ngay_nhap'] ?></b></h5>
                <p style="font-style: italic;">Số lượt xem sản phẩm: <?php echo $row_sp['so_luot_xem'] ?> </p>
                <p>Mô tả: <?php echo $row_sp['mo_ta'] ?> </p>

                <h2> Giá sản phẩm: <b style="color: red;"><?php echo $row_sp['don_gia'] ?> <sup>đ</sup> </b></h2>
                <h5>Số lượng <input type="number" min="1" max="100" step="1" style="text-align: center; border: 0.1px solid black;" name="soluong"></h5>
                <button type="submit" style="margin-left:25% ; width:50% ; height: 40px;" name="themgiohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
            </div>


        </form>

        <div class="bl" style="margin-top:50px ;">

            <?php
            if (!isset($_SESSION['dangnhap'])) {
                echo "<h4> $binhluan <a href='$dangnhap'> Đăng nhập tại đây </a></h4> ";
               
            } else {
                echo "<h4> $binhluan </h4>";
                include("playout/main/binhluan.php");
            }
            ?>
        </div>
      
      

    <?php }
    ?>

    <br>
    <br>

    <div class="chua" style="width: 100%; height: autos;">

        <h1 class="binhluan12" style="width: 70%;   font-size: 50px;font-weight: 600; margin-top: 130px; margin-bottom: 60px;">Các Lượt Bình Luận</h1>
        <?php
        $mysqli = new mysqli("localhost", "root", "", "du_an_mau");
        $sql_bl = "SELECT * FROM binh_luan,hang_hoa,khach_hang    
                WHERE  binh_luan.ma_hh = hang_hoa.ma_hh and khach_hang.ma_kh = binh_luan.ma_kh AND  binh_luan.ma_hh = '$_GET[id]'
                ORDER BY binh_luan.ma_bl DESC";
        $query_bl = mysqli_query($mysqli, $sql_bl);
        ?>

        <?php
        while ($row_bl = mysqli_fetch_array($query_bl)) {
        ?>
            <div id="binhluan2">
                <p style="font-size: 15px ; color: black;   text-align: left; line-height: 30px; height: auto;"> <?php echo $row_bl['ho_ten'] ?></p>
                <p class="chu" style="font-size: 30px ; color: black; font-weight:500 ; text-align: left; line-height: 30px;   padding-bottom: 30px;"> <?php echo $row_bl['noi_dung'] ?></p>
                <p style="font-size: 15px ; color: red;   text-align: right !important; line-height: 30px; height: auto; padding-right: 50px;"> <?php echo $row_bl['ngay_bl'] ?></p>
            </div>




        <?php }
        ?>



    </div>




</div>