<div class="container-fluid" id="history" style="margin: 150px 0px;">
    <div class="history" style="margin-top: 120px;">
        <h1 class="text-center">Lịch sử đơn hàng</h1>
        <form action="./dao/donhang_xuli.php" method="post">
            <table class="table table-striped" style="margin-top: 20px;margin-left: 10%; width: 80%;">
                <tr class="m">

                    <th>
                        Mã đơn hàng
                    </th>

                    <th>
                        Tên khách hàng
                    </th>
                    <th>
                        Số điện thoại
                    </th>
                    <th>
                        Địa chỉ
                    </th>

                    <th>
                        Thời gian đặt
                    </th>
                    <th>
                        Tổng tiền
                    </th>
                    <th>
                        Giảm giá
                    </th>
                    <th>
                        Tình trạng
                    </th>
                    <th>
                        Thanh toán
                    </th>


                    <th>
                    </th>

                    <th>

                    </th>

                </tr>



                <tr>
        </form>
        <?php
        include_once("./dao/pdo.php");
        $us =  $_SESSION['dangnhap'];
        $sql = "select * from khach_hang where email = '" . $us . "'";
        $query_seo = mysqli_query($mysqli, $sql);
        while ($row_seo = mysqli_fetch_array($query_seo)) {
            $a = $row_seo['ma_kh'];
        }
        $query = "SELECT * FROM hoadon,khach_hang where khach_hang.ma_kh = '" . $a . "' and hoadon.ma_kh = '" . $a . "'  ";
        $query_sanpham = mysqli_query($mysqli, $query);
        while ($hoadon = mysqli_fetch_array($query_sanpham)) {
            $tinhtrang = $hoadon['tinhtrang'];
            $thanhtoan = $hoadon['thanhtoan'];
            $voucher = $hoadon['ma_gg'];
            $huydon = "";
            $b = "";
            $c = "";
            $tien = 0;

            if ($thanhtoan == 0) {
                $c = "Chưa thanh toán";
            } else {
                $c = "Đã thanh toán";
            }
            if ($tinhtrang == 0) {
                $huydon = "Hủy đơn hàng";
                $b = "Đang xử lí";
            } else if ($tinhtrang == 1) {
                $huydon = "Hủy đơn hàng";
                $b = "Đã xử lí";
            } else if ($tinhtrang == 2) {
                $huydon = "";
                $b = "Đang giao hàng";
            } else {
                $huydon = "";
                $b = "Đã giao thành công";
            }
            if ($voucher == '') {
                $d = "Chưa sử dụng mã giảm giá";
            } else {
                $d = "Đã sử dụng mã giảm giá";
            }

        ?>

            <td><?php echo $hoadon['ma_hd'] ?></td>
            <td><?php echo $hoadon['ho_ten'] ?></td>
            <td><?php echo $hoadon['sdt'] ?></td>
            <td><?php echo $hoadon['diachi'] ?></td>
            <td><?php echo $hoadon['tgdat'] ?></td>
            <td><?php echo  number_format($hoadon['tongtien']) ?></td>
            <td><?php echo $d ?></td>
            <td style="color: green;"><?php echo $b ?></td>
            <td style="color: red;"><?php echo $c ?></td>
            <td>
                <form action="./dao/donhang_xuli.php?id=<?php echo $hoadon['ma_hd'] ?>" method="post">
                    <button class="huy" style="border: none;" name="huydon" type="submit"><?php echo $huydon ?></button>



                </form>
            </td>
            <td><a href="./lsdonhang.php?id=<?php echo $hoadon['ma_hd'] ?>">Xem chi tiết đơn hàng</a> </td>





            </tr>

        <?php
        } ?>




        </table>
    </div>

</div>
<style>
    th {
        background-color: #FE980F !important;
        color: white;
        text-align: center;
    }

    .huy:hover {
        background-color: #FE980F;
        color: white;
    }

    td {
        text-align: center;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>