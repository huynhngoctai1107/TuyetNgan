<?php

//Phân trang

$mysqli = new mysqli("localhost", "root", "", "du_an_mau");

$limit = 10;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $limit;

// $query = "SELECT * FROM users";
$query = "SELECT * FROM hang_hoa,loai where loai.ma_loai=hang_hoa.ma_loai ORDER BY hang_hoa.ma_hh ASC LIMIT $start_from, $limit";
$danhmucs = $mysqli->query($query); // liên quan đến dòng 33
$query_count = "SELECT COUNT(ma_hh) AS num_danhmuc FROM hang_hoa";
$count_danhmuc = $mysqli->query($query_count);
$count_danhmuc = $count_danhmuc->fetch_assoc();
$num_danhmuc = $count_danhmuc['num_danhmuc'];

?>

<table class="xuat">
    <tr>
        <th>Mã sản phẩm </th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh </th>
        <th>Đơn giá </th>
        <th>Giảm giá </th>
        <th>Ngày nhập</th>
        <th>số lượt xem </th>
        <th>Đặc biệt</th>
      

        <th>Mô tả </th>
        <th>Tên loại sản phẩm </th>

        <th>Quản lý</th>
    </tr>
    <?php

    if ($danhmucs->num_rows > 0) :
        while ($danhmuc = $danhmucs->fetch_assoc()) :

    ?>
            <tr>
                <td> <?php echo $danhmuc['ma_hh'] ?> </td>
                <td> <?php echo $danhmuc['ten_hh'] ?> </td>
                <td> <img width="300" src="../images/<?php echo $danhmuc['hinh'] ?> " alt="">  </td>
                <td> <?php echo $danhmuc['don_gia'] ?> </td>
                <td> <?php echo $danhmuc['giam_gia'] ?> </td>
                <td> <?php echo $danhmuc['ngay_nhap'] ?> </td>
                <td> <?php echo $danhmuc['so_luot_xem'] ?> </td>
                <td> <?php echo $danhmuc['dac_biet'] ?> </td>
                <td> <?php echo $danhmuc['mo_ta'] ?> </td>
                <td> <?php echo $danhmuc['ten_loai'] ?> </td>
                <td>
                    <a href="quanly/quanlytrangweb/sanpham_xuli.php?maloai= <?= $danhmuc['ma_hh'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> |
                    <a href="?action=sanpham&query=sua&maloai= <?= $danhmuc['ma_hh'] ?>"><img class="xoa" src="./img/pencil.png" alt=""></a>

                </td>


            </tr>
    <?php
        endwhile;
    endif;
    ?>



</table>
<ul class="pagination">

    <?php
    // var_dump($count_user);
    // var_dump((int)$num_user / $limit);
    for ($i = 1; $i <= ceil((int) $num_danhmuc / $limit); $i++) :

    ?>
        <li class="page-item"><a class="page-link" href="index.php?action=sanpham&query=them&page=<?= $i ?>"><?= $i ?></a></li>
    <?php
    endfor;
    ?>

</ul>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .xuat {
        background-color: white;
        width: 98%;
        margin-left: 1%;
        margin-top: 50px;
        border-collapse: collapse;


    }

    .xuat tr th {
        color: #f15a22;
        font-size: 190% !important;
    }

    .xuat tr th,
    tr td {
        font-size: 120%;
        text-align: center !important;
        font-family: 'Lobster', cursive;
        border: 1px solid black !important;
    }

    .xoa {
        width: 30px;
        height: 30px;
    }

    .pagination {
        margin-left: 10px;
        margin-top: 15px;
    }
</style>