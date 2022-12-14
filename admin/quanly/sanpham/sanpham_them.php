<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">
</head>

<body>
    <div class="nd1">
        <div class="nut">
            <div class="timkiem">

                <form class="timkiem1" action="./index.php?action=timkiem&query=them" method="POST">
                    <input style="border-radius: 20px 0px 0px 20px ; border:none ;height: 50px; padding-left: 10px ;" type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm">
                    <input style="border-radius: 0px 20px 20px 0px ; border:none ;height: 50px; background-color:whitesmoke ; color: black; " type="submit" value="tìm kiếm" name="timkiem">
                </form>

            </div>
            <div class="nut1" onclick="hinh13()" id="chu">Thêm</div>
        </div>
        <form id="chinhsua" action=".././dao/sanpham_xuli.php" method="POST" style="width:100% ; height: 100%;">

   
            
            <p>
                Tên sản phẩm
                <input type="text" name="tensanpham" id="">
            </p>
            <p class="anh1">Hình ảnh sản phẩm
                <input class="anh" type="file" name="hinhanh" id="">
            </p>
            
            <p>
                 Đặc biệt
                 <select name="dacbiett" id="">
                     <option value="1">Hàng sale</option>
                     <option value="2">Hàng không sale</option>
                 </select>
                
            </p>
            <p>
                Mô tả sản phẩm
                <input type="text" name="mota" id="">
            </p>
            <p>
                Giá
                <input type="text" name="gia" id="tien">
            </p>
            <p>
                Giá giảm
                <input type="text" name="giagiam" id="">
            </p>
           
            <p>
                 Loại món ăn
                 <?php
                    $mysqli = new mysqli("localhost", "root", "", "du_an_mau");
                    $sql_pro1 = "SELECT * FROM loai
                ORDER BY ma_loai DESC";
                    $query_pro1 = mysqli_query($mysqli, $sql_pro1);
                    ?>

                 <select name="maloaihang" id="">
                     <?php
                        while ($row_pro1 = mysqli_fetch_array($query_pro1)) {
                        ?>
                         <option value="<?php echo $row_pro1['ma_loai'] ?>"><?php echo $row_pro1['ten_loai'] ?></option>


                     <?php }
                        ?>



                 </select>

             </p>

            <p>
                <button type="submit" name="themsanpham">Cập Nhật</button>

            </p>

        </form>
    </div>
</body>

</html>

<script>
    var a = document.getElementById("tien");
    var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 2
    })
    var b = formatter.format(a);
    document.getElementById("tien").innerHTML = b;
</script>
<style>
    .anh1 {


        height: auto;
        position: relative;
        z-index: 10 !important;
        font-size: 100px;

    }

    .anh1 input {
        height: 60px !important;



    }

    .timkiem {
        padding-left: 60px;
    }

    .timkiem1 {
        font-family: 'DynaPuff', cursive;
        display: flex;
        justify-content: center;
    }

    .nd1 {
        width: 100%;
        height: auto;


    }

    .nut {
        width: 100%;

        padding-top: 20px;
        height: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .nut1 {
        margin-right: 60px;
        text-align: center;
        line-height: 35px;
        width: 10%;
        background-color: white;
        box-shadow: 0px 0px 5px black;
        color: 5e72e4;
        font-family: 'Kanit', sans-serif;
        font-size: 130%;
        height: 40px;
        border-radius: 20px;
    }

    table tr td {
        border: 2px black solid;

    }

    #chinhsua {
        border-radius: 10px;
        margin-bottom: 50px;
        display: none;
        box-shadow: 0px 0px 5px black;
        width: 40% !important;
        height: auto !important;
        margin-left: 30%;
        background-color: white;


    }

    #chinhsua p {
        font-size: 120%;
        font-family: 'Mochiy Pop One', sans-serif;
        line-height: 50px;
        margin-left: 10%;
        width: 80%;
        color: #445ad8;
        height: auto;
        display: flex;
        flex-direction: column;

    }

    #chinhsua p input {
        box-shadow: 0px 0px 5px black;
        height: 35px;
        padding-left: 20px;
        border: none;
        border-radius: 10px;
    }

    #chinhsua p button {
        margin-bottom: 30px;
        border: none;
        background-color: #5e72e4;
        font-size: 120%;
        width: 45%;
        margin-left: 27.5%;
        margin-top: 30px;
        font-family: 'Lobster', cursive;
        border-radius: 10% 40%;
        color: white;
        height: 50px;
    }

    #chinhsua p button:hover {
        background-color: green;
    }
</style>
<script>
    var a = 0;

    function hinh13() {

        if (a == 0) {
            document.getElementById("chinhsua").style.display = "block";
            document.getElementById("chu").innerHTML = "Đóng";
            a++;
        } else {
            document.getElementById("chinhsua").style.display = "none";
            document.getElementById("chu").innerHTML = "Thêm"
            a = 0;
        }


    }
</script>