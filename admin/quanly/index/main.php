<!-- End Navbar -->





<div class="container-fluid py-4">






    <div class="row">
        <div class="col-lg-7 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">Quản trị </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Tổng loại hàng</p>
                                <h4 class="mb-0">
                                    <?php include(".././dao/pdo.php");
                                    $sql = "select count(ma_loai) as sum from loai"; 
                                    $result = mysqli_query($mysqli, $sql);
                                    $data = mysqli_fetch_assoc($result);
                                    echo $data['sum'];
                                    ?>
                                </h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                        </div>
                    </div>

                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">leaderboard</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Tổng Số Sản Phẩm</p>
                                <h4 class="mb-0"> <?php include(".././dao/pdo.php");
                                                    $sql = "select count(ma_hh) as sum from hang_hoa";
                                                    $result = mysqli_query($mysqli, $sql);
                                                    $data = mysqli_fetch_assoc($result);
                                                    echo $data['sum'];
                                                    ?></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">message</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">Bình Số Bình Luận</p>
                                <h4 class="mb-0 "> <?php include(".././dao/pdo.php");
                                                    $sql = "select count(ma_bl) as sum from binh_luan";
                                                    $result = mysqli_query($mysqli, $sql);
                                                    $data = mysqli_fetch_assoc($result);
                                                    echo $data['sum'];
                                                    ?></h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                        </div>
                    </div>

                    <div class="card ">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10"> account_circle</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">Tổng Số Người Dùng</p>
                                <h4 class="mb-0 ">
                                    <?php include(".././dao/pdo.php");
                                    $sql = "select count(ma_kh) as sum from khach_hang";
                                    $result = mysqli_query($mysqli, $sql);
                                    $data = mysqli_fetch_assoc($result);
                                    echo $data['sum'];
                                    ?></h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>


    <div class="row">
        <div class="col-lg-7 position-relative z-index-2">


            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape  shadow-info text-center border-radius-xl mt-n4 position-absolute" style="background-color:orange !important;">
                                <i class="material-icons opacity-10"> attach_money</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Tổng dòng tiền</p>
                                <h4 class="mb-0">
                                    <?php include(".././dao/pdo.php");
                                    $sql = "select sum(tongtien) as sum from hoadon where tinhtrang=3   ";
                                    $result = mysqli_query($mysqli, $sql);
                                    $data = mysqli_fetch_assoc($result);
                                   
                                    echo number_format($data['sum']) ." đ";
                                    ?>
                                </h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                        </div>
                    </div>

                    <div class="card  mb-2">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape   shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute" style="background-color:violet  !important;">
                                <i class="material-icons opacity-10">shopping_cart</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Tổng Số Đơn Hàng</p>
                                <h4 class="mb-0"> <?php include(".././dao/pdo.php");
                                                    $sql = "select count(ma_hd) as sum from hoadon";
                                                    $result = mysqli_query($mysqli, $sql);
                                                    $data = mysqli_fetch_assoc($result);
                                                    echo $data['sum'];
                                                    ?></h4>
                            </div>
                        </div>

                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
                    

                    <div class="card ">
                        <div class="card-header p-3 pt-2 bg-transparent">
                            <div class="icon icon-lg icon-shape  shadow-info text-center border-radius-xl mt-n4 position-absolute" style="background-color: red;">
                                <i class="material-icons opacity-10"> confirmation_number</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">Tổng Số Voucher</p>
                                <h4 class="mb-0 ">
                                    <?php include(".././dao/pdo.php");
                                   $sql = "select count(ma_gg) as sum from giam_gia";
                                   $result = mysqli_query($mysqli, $sql);
                                   $data = mysqli_fetch_assoc($result);
                                   echo $data['sum'];
                                    ?></h4>
                            </div>
                        </div>

                        <hr class="horizontal my-0 dark">
                        <div class="card-footer p-3">
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>



</div>
<div class="container" style="display: flex; justify-content: space-evenly;" >
    <div   style="width:40% ;">
    <h4>Thống kê sản phẩm</h4> <canvas id="myChart1"></canvas></div>
    <div    style="width:40% ;"><h4>Thống kê đơn hàng</h4>  <canvas id="myChart2"></canvas></div>

</div>
<?php  
include_once('../admin/thongke/thongke.php');
?>