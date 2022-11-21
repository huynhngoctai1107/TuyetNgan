<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">


<?php
if (isset($_POST['timkiem3'])) {
    $tukhoa = $_POST['tukhoa3'];
}
$sql_pro = "SELECT * FROM hoadon,khach_hang
    WHERE  hoadon.ma_kh = khach_hang.ma_kh and ho_ten LIKE '%" . $tukhoa . "%' ";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>
<p style="padding-left: 60px  ; padding-top: 30px; color: black;font-family: 'DynaPuff', cursive;">Tìm kiếm danh mục: <b style="margin-left:10px ; color:black;"><?php echo $_POST['tukhoa3'] ?> </b></p>
<table class="xuat">
    <tr>
        <th>id </th>
        <th>Tên khách hàng</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Thời gian đặt</th>
        <th>Tổng tiền</th>
        <th>Tình trạng</th>
        <th>Thanh toán</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = -1;
    while ($danhmuc = mysqli_fetch_array($query_pro)) {
        $i++;
    ?>
        <tr>
        <td> <?php echo $danhmuc['ma_hd'] ?> </td>
                <td> <?php echo $danhmuc['ho_ten'] ?> </td>
                <td> <?php echo $danhmuc['sdt'] ?> </td>
                <td> <?php echo $danhmuc['diachi'] ?> </td>
                <td> <?php echo $danhmuc['tgdat'] ?> </td>
                <td> <?php echo $danhmuc['tongtien'] ?> </td>
                <td> <?php echo $danhmuc['tinhtrang'] ?> </td>
                <td> <?php echo $danhmuc['thanhtoan'] ?> </td>

            <td>
                <a href=".././dao/donhang_xuli.php?mahd= <?= $danhmuc['ma_hd'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> |
                <a href="?action=hoadon&query=sua&mahd= <?= $danhmuc['ma_hd'] ?>"><img class="xoa" src="./img/pencil.png" alt=""></a>

            </td>


        </tr>
    <?php
    }
    ?>
</table>
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