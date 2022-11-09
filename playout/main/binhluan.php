
   <?php
    $mysqli1 = new mysqli("localhost", "root", "", "du_an_mau");
    $sql_tk = "SELECT * FROM khach_hang  where khach_hang.email = '".$tk."' ";
    $query_tk = mysqli_query($mysqli1, $sql_tk);
    ?>

<?php
    while ($row_tk = mysqli_fetch_array($query_tk)) {
    ?>



<div id="binhluan">
    <form action="playout/main/binhluan_xuli.php" method="post">
        <input type="hidden" name="ma_kh" value="<?php echo $row_tk['ma_kh'] ?>">
        <input type="hidden" name="ma_hh"  value="<?php echo $row_sp['ma_hh'] ?>">
        <input type="text" name="noidung" required style="height:150px ;" placeholder="Nội dung">
        <button type="submit" class="button" name="guibinhluan">Gửi Bình Luận</button>
    </form>
</div>

<?php }
    ?>



<style>
    #binhluan {
        width: 70%;
        height: auto;
        margin-top: 150px;
        margin-left: 15%;
    }

    #binhluan form {
        margin-left: 10%;
        width: 80%;
        display: flex;
        align-items: center;
        flex-direction: column;
        height: auto;
    }

    #binhluan input {
        height: 50px;
    }
    p {
        text-align: justify !important;
    }
    #binhluan input
  {
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

</style>