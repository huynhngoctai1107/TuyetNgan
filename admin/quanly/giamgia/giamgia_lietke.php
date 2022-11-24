<?php

//Phân trang

include(".././dao/pdo.php");

$limit = 6;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $limit;

// $query = "SELECT * FROM users";
$query = "SELECT * FROM giam_gia ORDER BY ma_gg ASC LIMIT $start_from, $limit";
$danhmucs = $mysqli->query($query); // liên quan đến dòng 33
$query_count = "SELECT COUNT(ma_gg) AS num_danhmuc FROM giam_gia";
$count_danhmuc = $mysqli->query($query_count);
$count_danhmuc = $count_danhmuc->fetch_assoc();
$num_danhmuc = $count_danhmuc['num_danhmuc'];

?>

<table class="xuat">
    <tr>
        <th>Mã giảm giám</th>
        <th>Số tiền giảm</th>

        <th>Điều kiện</th>
        <th>Ngày tạo mã</th>
        <th>Quản lý</th>
    </tr>
    <?php

    if ($danhmucs->num_rows > 0) :
        while ($danhmuc = $danhmucs->fetch_assoc()) :
            if ($danhmuc['dieukien'] < 1000) {
                $dieukien = "Áp dụng cho tất cả hóa đơn";
            } else {
                $dieukien ="Đơn hàng phải lớn hơn ". number_format($danhmuc['dieukien']);
            }
    ?>
            <tr>
                <td style="color: red; font-size: 30px;font-family: 'Roboto', sans-serif; "> <?php echo $danhmuc['ma_giamgia'] ?> </td>
                <td> <?php echo number_format($danhmuc['giamgia']) ?> </td>
                <td style="color: green;"> <?php echo $dieukien ?> </td>
                <td> <?php echo $danhmuc['ngay'] ?> </td>
                <td>

                    <a href=".././dao/giamgia_xuli.php?magg=<?= $danhmuc['ma_gg'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> |
                    <a href="?action=giamgia&query=sua&magg=<?= $danhmuc['ma_gg'] ?>"><img class="xoa" src="./img/pencil.png" alt=""></a>


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
        <li class="page-item"><a class="page-link" href="./index.php?action=giamgia&query=them&page=<?= $i ?>"><?= $i ?></a></li>
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