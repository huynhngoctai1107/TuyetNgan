<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">


<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
}
$sql_pro = "SELECT * FROM loai,hang_hoa
    WHERE loai.ma_loai = hang_hoa.ma_loai and  ( hang_hoa.ten_hh LIKE '%" . $tukhoa . "%' OR loai.ten_loai like '%" . $tukhoa . "%' ) ";
$query_pro = mysqli_query($mysqli, $sql_pro);





?>





<p style="padding-left: 60px  ; padding-top: 30px; color: black;font-family: 'DynaPuff', cursive;">Tìm kiếm danh mục: <b style="margin-left:10px ; color:black;"><?php echo $_POST['tukhoa'] ?> </b></p>
<table class="xuat">
    <tr>
        <th>Mã sản phẩm </th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh </th>
        <th>Đơn giá </th>
        <th>Giảm giá </th>
        <th>Ngày nhập</th>
        <th>số lượt xem </th>


        <th>Mô tả </th>
        <th>Tên loại sản phẩm </th>

        <th>Quản lý</th>
    </tr>
    <?php
    $i = -1;
    while ($danhmuc = mysqli_fetch_array($query_pro)) {
        $i++;
    ?>
        <tr>
            <td> <?php echo $danhmuc['ma_hh'] ?> </td>
            <td> <?php echo $danhmuc['ten_hh'] ?> </td>
            <td> <?php echo $danhmuc['hinh'] ?> </td>
            <td> <?php echo $danhmuc['don_gia'] ?> </td>
            <td> <?php echo $danhmuc['giam_gia'] ?> </td>
            <td> <?php echo $danhmuc['ngay_nhap'] ?> </td>
            <td> <?php echo $danhmuc['so_luot_xem'] ?> </td>
            <td> <?php echo $danhmuc['mo_ta'] ?> </td>
            <td> <?php echo $danhmuc['ten_loai'] ?> </td>
            <td>
                <a href="quanly/quanlytrangweb/sanpham_xuli.php?maloai= <?= $danhmuc['ma_hh'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> |
                <a href="?action=sanpham&query=sua&maloai= <?= $danhmuc['ma_hh'] ?>"><img class="xoa" src="./img/pencil.png" alt=""></a>

            </td>


        </tr>
    <?php
    }
    ?>



    <?php
    if ($i == -1) {

        echo  "<h3>Tìm kiếm danh mục:  <h1>Không tìm thấy </h1></h3>";
    } else {
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