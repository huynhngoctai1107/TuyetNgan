<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

            <ul class="navbar-nav  justify-content-end">


                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>

                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
                                    <?php $mysqli = new mysqli("localhost", "root", "", "du_an_mau");
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
                                <h4 class="mb-0">  <?php $mysqli = new mysqli("localhost", "root", "", "du_an_mau");
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
                                <i class="material-icons opacity-10">store</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">Bình Số Bình Luận</p>
                                <h4 class="mb-0 ">  <?php $mysqli = new mysqli("localhost", "root", "", "du_an_mau");
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
                                 
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize ">Tổng Số Người Dùng</p>
                                <h4 class="mb-0 ">
                                    <?php $mysqli = new mysqli("localhost", "root", "", "du_an_mau");
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
 
 

</div>