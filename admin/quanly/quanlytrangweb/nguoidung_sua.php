<?php
$sql_sua_danhmucsp = "SELECT * FROM khach_hang where ma_kh='$_GET[makh]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<table class=" ">
    <form class="cs" style="" action="quanly/quanlytrangweb/nguoidung_xuli.php?makh=<?php echo $_GET['makh'] ?>" method="POST">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {

        ?>
            <div class="chinhsua">
                <h1 style="text-align: center;">Chỉnh Sửa</h1>



                <h6>Họ và tên</h6>
                <input type="text" value="<?php echo $dong['ho_ten'] ?>" name="ho_ten" id="">

                <br><br>
                <h6>Mật khẩu</h6>
                <input type="text" value="<?php echo $dong['mat_khau'] ?>" name="mat_khau" id="">
                <br><br>
                <h6>Trạng thái </h6>
                <select name="trangthai" id="" style="width: 70%; margin-left: 15%; height: 40px;">
                    <option value="0">Hoạt động</option>
                    <option value="1">Không hoạt động</option>
                   
                </select>

                <br><br>
                <h6>Vai trò </h6>
                <select name="vaitro" id="" style="width: 70%; margin-left: 15%; height: 40px;">
                <option value="0">Khách hàng</option>
                <option value="1">Quản trị viên</option>
                </select>

                <br><br>



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