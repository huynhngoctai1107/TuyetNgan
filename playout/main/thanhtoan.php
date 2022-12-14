<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/footer.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="container pt-5" style="margin:  150px auto;">
    <div class="row">
        <div class="col-sm-6">
            <h5 class="text-center">CHI TIẾT HÓA ĐƠN</h5>
            <table class="table">
                <thead>
                    <tr>
                        <form action="" method="POST">
                            <th colspan="6">

                                <input type="text" style="width:100% ; height: 40px; padding-left: 10px;" placeholder="Mã Voucher" name="voucher">
                            </th>

                            <th colspan="2"><button style="width:100%; background-color: #FE980F; color: white; border: none;height: 40px;" type="submit" name="apdung">Áp dụng</button></th>
                        </form>

                    </tr>

                    <tr>
                        <th colspan="2">ID</th>
                        <th colspan="2">Tên</th>
                        
                        <th colspan="2">Số lượng</th><th colspan="2">Giá</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include_once("./dao/pdo.php");


                    $cookie_data = $_COOKIE['cart'];
                    $cart_data = json_decode($cookie_data, true);

                    $tongtatca = 0;
                    // var_dump($cart_data);
                    foreach ($cart_data as $sp) :
                        $tongtien = $sp['don_gia'] * $sp['soluong'];
                        $tongtatca += $tongtien;
                    ?>


                        <tr>
                        <tr>
                            <td scope="row" colspan="2"><?= $sp['ma_hh'] ?></td>
                            <td colspan="2"><?= $sp['ten_hh'] ?></td>

                            <td colspan="2">
                                <?= $sp['soluong'] ?>

                            </td>
                            <td colspan="2"> <?= number_format($sp['don_gia']) ?> đ</td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    <?php
                    $giamgia = 0;
                    $thongbao = "";
                    $id = "" ;
                    $tt = $tongtatca; 
                    include('./dao/voucher_xuli.php');
                    echo $thongbao;
                    ?>

                    <td colspan="3">Thanh toán</td>

                    <td colspan="2"></td>
                    <td colspan="2">
                        <b>+<?= number_format($tongtatca) ?> đ</b>
                    </td colspan="2">
                    </tr>
                    <tr>

                        <td colspan="2">Phí vận chuyển</td>
                        <td colspan="2"></td>

                        <td colspan="2"></td>
                        <td colspan="2">+<?= number_format(30000) ?> đ</td>
                    </tr>
                    <tr>

                        <td colspan="2">Voucher giảm giá</td>
                        <td colspan="2"></td>

                        <td colspan="2"></td>
                        <td colspan="2">-<?= number_format($giamgia) ?> đ</td>
                    </tr>
                    <tr>

                        <td colspan="3">Tổng Thanh toán</td>

                        <td colspan="2"></td>
                        <td colspan="2">
                            <b style="color: red;"><?= number_format($tongtatca + 30000 - $giamgia) ?> đ</b>
                        </td colspan="2">
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="col-sm-6">
            <?php
            $username = $_SESSION['dangnhap'];
            $query = "SELECT * FROM khach_hang WHERE email=   '" . $username . "' ";
            $khachhang = $mysqli->query($query)->fetch_assoc();

            ?>

            <h5 class="text-center">THÔNG TIN THANH TOÁN</h5>

            <form action="./dao/thanhtoan_xuli.php" method="post">

                <input type="hidden" name="ma_kh" id="" value="<?= $khachhang['ma_kh'] ?>">

                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" name="email" id="" value="<?= $_SESSION['dangnhap'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sdt">Số điện thoại</label>
                    <input type="text" name="sdt" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="diachi">Địa chỉ</label>
                    <textarea name="diachi" id="" rows="5" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="username">Phương thức thanh toán</label>
                    <select name="pttt">
                        <option value="0">Thanh toán khi nhận hàng</option>
                        <option value="1">Thanh toán qua tài khoản ngân hàng</option>
                    </select>
                </div><br>

                <input type="hidden" name="tongtien" id="" value="<?= $tongtatca - $giamgia ?>">
                <input type="hidden" name="ma_gg" id="" value="<?= $id ?>">

                <button class="btn btn-outline-dark" name="thanhtoan">ĐẶT HÀNG</button>
            </form>
        </div>
    </div>

</div>
<style>
    button:hover {
        background-color: #fdb45e;
        color: white !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>