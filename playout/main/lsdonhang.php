    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <div class="container-fluid" id="history" style="margin: 150px 0px;">
        <div class="history" style="margin-top: 120px;">
            <h1 class="text-center">LỊCH SỬ ĐẶT HÀNG</h1>
            <table class="table table-striped" style="margin-top: 20px;margin-left: 25%; width: 50%;">
                <tr class="m">

                    <th>
                        Mã
                    </th>
                    <th>
                        Tên
                    </th>
                    <th>
                        Số lượng
                    </th>
                    <th>
                        Đơn giá
                    </th>
                    <th>
                        Tổng tiền
                    </th>
                    <th>
                        Thời gian đặt
                    </th>


                </tr>



                <tr>
                    <?php
                    include_once("./dao/pdo.php");
                    $query = "SELECT * FROM hoadon,hang_hoa ";
                    $query_sanpham = mysqli_query($mysqli, $query);
                    while ($hoadon = mysqli_fetch_array($query_sanpham)) {

                    ?>
                <tr>
                    <td><?php echo $hoadon['ma_hh'] ?></td>
                    <td><?php echo $hoadon['ten_hh'] ?></td>
                    <td><?php echo $hoadon['soluong'] ?></td>
                    <td><?php echo $hoadon['don_gia'] ?></td>
                    <td><?php echo $hoadon['tongtien'] ?></td>
                    <td><?php echo $hoadon['tgdat'] ?></td>







                </tr>
            <?php
                    } ?>





            </tr>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>