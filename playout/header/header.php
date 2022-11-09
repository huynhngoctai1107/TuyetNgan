<?php

$a =  "";
$link = "";
if (!isset($_SESSION['dangnhap'])) {
    $a = "Đăng nhập";
    $link = "./login.php";
} else {
    $a = 'Đăng xuất';
    $link = "./playout/header/dangxuat.php";
}

?>




<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <script type="text/javascript" src="https://web.cmbliss.com/webtools/hotline/js/hotline.js"></script>

                            <li><a href="tel:0949615859"><i class="fa fa-phone"></i> 0949615859</a></li>
                            <li><a href="mailto: htai67934@gmai.com"><i class="fa fa-envelope"></i> htai6734@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/tai.huynhngoc.58152/"><i class="fa fa-facebook"></i></a></li>




                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="./index.php?id="><img src="images/logo.png" alt="" /></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav" id="an">
                            <li><a href="./acout.php"><i class="fa fa-user"></i> Tài Khoản</a></li>


                            <li><a href="<?php echo $link ?>"><i class="fa fa-lock"></i><?php echo $a ?></a></li>

                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>
                            <li><a href="./admin/index.php?action=trangchu&query=them"><i class="fa fa-star"></i>Trang Quản Trị</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php?id= " class="active">Trang Chủ</a></li>
                            <li><a href="gioithieu.php?id= " class="active">Giới thiệu</a></li>
                            <li class="dropdown"><a href="./shop.php">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <!-- sản phẩm từ dastabase -->
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Tin Tức<i class="fa fa-angle-down"></i></a>
                                <ul role="menu?id=" class="sub-menu">
                                    <li><a href="blog.php">Tin Tức </a></li>
                                </ul>
                            </li>

                            <li><a href="contact-us.php">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <form action="./timkiem.php" method="post" class="form1" style="display: flex;">
                        <form>
                            <input class="input" name="timkiem" type="search" placeholder="Tìm kiếm...">
                            <button class="button1" name="guitimkiem" type="submit">Search</button>
                        </form>
                        <!-- <input style="border: none; background-color:#F0F0E9; height: 40px; width: 200px;  padding-left: 10px;" type="text" placeholder="Tìm Kiếm" />
                        <button style="border: none; background-color:#F0F0E9; height: 40px; width: 80px; margin-left: 10px;" type="submit" class=""> </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<style>
    .form1 {
        color: #555;
        display: flex;
        padding: 2px;
        background-color: #F0F0E9;
        border-radius: 5px;
    }

    .input[type="search"] {
        border: none;
        background: transparent;
        margin: 0;
        padding: 7px 8px;
        font-size: 14px;
        color: inherit;
        border: 1px solid transparent;
        border-radius: inherit;
    }

    .input[type="search"]::placeholder {
        color: #bbb;
    }

    .button1[type="submit"] {
        text-indent: -999px;
        overflow: hidden;
        width: 40px;
        padding: 0;
        margin: 0;
        border: 1px solid transparent;
        border-radius: inherit;
        background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat center;
        cursor: pointer;
        opacity: 0.7;
    }

    .button1[type="submit"]:hover {
        opacity: 1;
    }

    .button1[type="submit"]:focus,
    .input[type="search"]:focus {
        box-shadow: 0 0 3px 0 #1183d6;
        border-color: #1183d6;
        outline: none;
    }
</style>