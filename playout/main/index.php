<section>
    <div class="container">



        <div class="row">

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Chuyên Mục Sản Phẩm</h2>


                    <?php
                    include_once("./dao/pdo.php");
                    if (isset($_GET['id'])) {
                        $tam = $_GET['id'];
                    } else {
                        $tam = '';
                    }
                    if ($tam == '') {

                        $sql_sanpham = "SELECT * FROM hang_hoa where dac_biet = 2 ";
                        $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
                    } else {

                        $sql_sanpham = "SELECT * FROM hang_hoa,loai 
                           WHERE  hang_hoa.ma_loai= loai.ma_loai AND hang_hoa.ma_loai = '$_GET[id]'
                         ORDER BY hang_hoa.ma_hh ASC";
                        $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
                    }
                    ?>




                    <?php
                    while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                    ?>
                        <form class="col-sm-4" action="dao/giohang_xuli.php?id=<?php echo $row_sanpham['ma_hh'] ?>" method="post">
                            <a href="./chitiet.php?id=<?php echo $row_sanpham['ma_hh'] ?>" class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">

                                        <img src="./images/<?php echo $row_sanpham['hinh'] ?>" width="100%" height="200" alt="" />
                                        <h1 style="color: #696763; font: 25px;"><?php echo $row_sanpham['ten_hh'] ?> </h1>
                                        <h2><?php echo number_format($row_sanpham['don_gia']) ?> <sup>đ</sup></h2>
                                        <p>Tiệm bánh Tuyết Ngân</p>
                                        <input type="hidden" value="<?php echo $row_sanpham['ma_hh'] ?>" name="ma_hh">
                            </a>
                            <button type="submit" name="themgiohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
                </div>

            </div>


            </form>

        <?php
                    } ?>







        </div>
        <!--features_items-->


        <!--/category-tab-->

        <div class="recommended_items">

            <?php

      
            $sql_seo = "SELECT * FROM loai,hang_hoa where loai.ma_loai = hang_hoa.ma_loai and dac_biet=1 ORDER BY  ma_hh ASC  ";
            $query_seo = mysqli_query($mysqli, $sql_seo);

            ?>



            <h2 class="title text-center">Sale sản phẩm
            </h2>

            <div id="recommended-item-carousel" class="carousel slide">
                <div class="carousel-inner">

                    <?php
                    while ($row_seo = mysqli_fetch_array($query_seo)) {
                    ?> <form class="col-sm-4" action="dao/giohang_xuli.php?id=<?php echo $row_seo['ma_hh'] ?>" method="post" style="float: left !important;">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">


                                        <a href="./chitiet.php?id=<?php echo $row_seo['ma_hh'] ?>">

                                            <img src="./images/<?php echo $row_seo['hinh'] ?>" width="100%" height="200" alt="" />
                                            <h1 style="color: #696763; font: 25px;"><?php echo $row_seo['ten_hh'] ?> </h1>

                                            <h2><?php echo number_format($row_seo['don_gia']) ?> <sup>đ</sup></h2>
                                            <p>Tiệm bánh Tuyết Ngân
                                            </p>
                                            <input type="hidden" value="<?php echo $row_seo['ma_hh'] ?>">
                                        </a>
                                        <button type="submit" name="themgiohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>

                                    </div>

                                </div>
                            </div>
                        </form>
                    <?php
                    } ?>


                </div>

            </div>
        </div>
        <!--/recommended_items-->

    </div>




    <?php
  
    $sql_danhmuc = "SELECT * FROM loai ORDER BY  ma_loai ASC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

    ?>





    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Loại Hàng</h2>
            <div class="panel-group category-products" id="accordian" style="width: 100%; height: auto;">
                <!--category-productsr-->
                <div class="panel panel-default" style="width: 100%; height: auto;">
                    <div class="panel-heading" style="width: 100%; height: auto;">
                        <?php
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?> <h4 class="panel-title" style="width: 100%; height: auto;">

                                <a href="./index.php?id=<?php echo $row_danhmuc['ma_loai'] ?>">


                                    <?php echo $row_danhmuc['ten_loai'] ?></a>



                            </h4> <br><?php
                                    } ?>
                    </div>

                </div>




            </div>
            <!--/category-products-->



            <div class="brands_products" style="width: 100%; height: auto; ">
                <!--brands_products-->
                <h2>Danh sách Yêu Thích</h2>
                <?php
            
                $sql_sanpham = "SELECT * FROM loai,hang_hoa where loai.ma_loai = hang_hoa.ma_loai and so_luot_xem > 0 ORDER BY so_luot_xem DESC limit 0,10 ";
                $query_sanpham = mysqli_query($mysqli, $sql_sanpham);

                ?>
                <div class="brands-name" style="width: 100%; height: auto;">
                    <ul class="nav nav-pills nav-stacked" style="width: 100%; height: auto; ">
                        <li style="width: 100%; height: auto; ">
                            <?php
                            while ($row_sp = mysqli_fetch_array($query_sanpham)) {
                            ?>
                                <a href="./chitiet.php?id=<?php echo $row_sp['ma_hh'] ?>">
                                    <div class="sum" style="width: 100%; height: auto; display: flex;">
                                        <div class="trai" style="width: 59%; margin-right: 2%; ">
                                            <img width="90%" src="./images/<?php echo $row_sp['hinh'] ?>" alt="">

                                        </div>
                                        <div class="phai" style="width: 38%; padding-left: 10px;  ">
                                            <p> <?php
                                                echo $row_sp['ten_hh'];
                                                ?> (<?php
                                                    echo $row_sp['so_luot_xem'];
                                                    ?>)</p>

                                            <p style="color: red;">
                                                <?php
                                                echo number_format($row_sp['don_gia']);
                                                ?> đ</p>

                                        </div>
                                    </div>
                                </a>
                            <?php
                            } ?>

                        </li>
                    </ul>
                </div>
            </div>
            <!--/brands_products-->


            <!--/price-range-->


            <!--/shipping-->

        </div>
    </div>

    </div>
    </div>
</section>