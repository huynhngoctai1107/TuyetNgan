<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">


<?php
if (isset($_POST['timkiem4'])) {
    $tukhoa = $_POST['tukhoa4'];
}
$sql_pro = "SELECT * FROM giam_gia
    WHERE ma_giamgia LIKE '%" . $tukhoa . "%' ";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>
<p style="padding-left: 60px  ; padding-top: 30px; color: black;font-family: 'DynaPuff', cursive;">Tìm kiếm danh mục: <b style="margin-left:10px ; color:black;"><?php echo $_POST['tukhoa4'] ?> </b></p>
<table class="xuat">
    <tr>
        <th>Mã giảm giám</th>
        <th>Số tiền giảm</th>
        <th>Ngày tạo mã</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = -1;
    while ($danhmuc = mysqli_fetch_array($query_pro)) {
        $i++;
    ?>
        <tr>
            <td style="color: red; font-size: 30px;font-family: 'Roboto', sans-serif; "> <?php echo $danhmuc['ma_giamgia'] ?> </td>
            <td> <?php echo number_format($danhmuc['giamgia']) ?> </td>
            <td> <?php echo $danhmuc['ngay'] ?> </td>
            <td>

                <a href=".././dao/giamgia_xuli.php?magg=<?= $danhmuc['ma_gg'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> |
                <a href="?action=giamgia&query=sua&magg=<?= $danhmuc['ma_gg'] ?>"><img class="xoa" src="./img/pencil.png" alt=""></a>


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