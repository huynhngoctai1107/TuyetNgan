<?php
$sql_sua_danhmucsp = "SELECT * FROM giam_gia WHERE ma_gg='$_GET[magg]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<table class=" ">
    <form class="cs" style="" action=".././dao/giamgia_xuli.php?magg=<?php echo $_GET['magg'] ?>" method="POST">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {

        ?>
            <div class="chinhsua">
                <h1 style="text-align: center;">Chỉnh Sửa</h1>



                <h6>Mã giảm giá</h6>
                <input type="text" value="<?php echo $dong['ma_giamgia'] ?>" name="magiamgia" id="">

                <br><br>
                <h6>Số tiền được giảm</h6>
                <input type="text" value="<?php echo $dong['giamgia'] ?>" name="sotiengiam">
                <h6>Điều kiện giảm giá</h6>
                <input type="text" value="<?php echo $dong['dieukien'] ?>" name="dieukien">


                <button class="nut12" type="submit" name="suagiamgia" value="">Chỉnh Sửa</button>

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