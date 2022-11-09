<?php
$sql_sua_danhmucsp = "SELECT * FROM hang_hoa,loai WHERE loai.ma_loai=hang_hoa.ma_loai and ma_hh='$_GET[maloai]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<table class=" ">
    <form class="cs" style="" action="quanly/quanlytrangweb/sanpham_xuli.php?maloai=<?php echo $_GET['maloai'] ?>" method="POST">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {

        ?>
            <div class="chinhsua">
                <h1 style="text-align: center;">Chỉnh Sửa</h1>



                <h6>Tên sản phẩm</h6>
                <input type="text" value="<?php echo $dong['ten_hh'] ?>" name="tensanpham" id="">

                <br><br>
                <h6>Loại sản phẩm</h6>

                <select name="maloaihang" id="" style="width: 70%; margin-left: 15%; height: 40px;">

                    <option value="<?php echo $dong['ma_loai'] ?>"><?php echo $dong['ten_loai'] ?></option>
                </select>

                <br><br>
                <h6>Hình ảnh món ăn</h6>

                <input type="file" value="<?php echo $dong['hinh'] ?>" name="hinhanh" id="">
                <br><br>
                <h6>Giá</h6>
                <input type="text" value="<?php echo $dong['don_gia'] ?>" name="gia" id="">
                <br><br>
                <h6>Mô tả</h6>
                <input type="text" value="<?php echo $dong['mo_ta'] ?>" name="mota" id="">
                <br><br>
                <h6>Đặc biệt</h6>

                <select name="dacbiett" style="width: 70%; margin-left: 15%; height: 40px;" id="">

                    <option value="1">Hàng sale</option>
                    <option value="2">Hàng không sale</option>




                </select>




                <button class="nut12" type="submit" name="sua" value="">Chỉnh Sửa</button>

            </div>

        <?php } ?>
    </form>
</table>
<style>
    .chinhsua {
        padding: 50px 0px;
        box-shadow: 0px 0px 5px black;
        background-color: white;
        width: 50%;
        height: auto;
        border: none;
        margin-top: 2%;
        margin-left: 25%;
    }






    .nut12 {
        width: 30%;
        text-align: center;
        height: 50px;
        margin-left: 35%;
        margin-top: 50px;

        border-radius: 60% 10%;
        border: none;
        background-color: #5e72e4;
        color: white;
    }

    .nut12:hover {
        background-color: green;
    }

    h6 {
        width: 70%;
        margin-left: 15%;
    }

    input {
        height: 50px;
        margin: 10px 0px;
        width: 70%;
        margin-left: 15%;
    }
</style>