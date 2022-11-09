<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">


<?php
if (isset($_POST['timkiem1'])) {
    $tukhoa = $_POST['tukhoa1'];
}
$sql_pro = "SELECT * FROM loai
    WHERE  loai.ten_loai LIKE '%" . $tukhoa . "%' ";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>
<p style="padding-left: 60px  ; padding-top: 30px; color: black;font-family: 'DynaPuff', cursive;">Tìm kiếm danh mục:  <b style="margin-left:10px ; color:black;"><?php  echo $_POST['tukhoa1'] ?> </b></p>
<table class="xuat">
<tr>
        <th>id </th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = -1;
    while ($danhmuc = mysqli_fetch_array($query_pro)) {
        $i++;
    ?>
       <tr>
                <td> <?php echo $danhmuc['ma_loai'] ?> </td>
                <td> <?php echo $danhmuc['ten_loai'] ?> </td>
                <td>
                <a href="quanly/quanlytrangweb/danhmuc_xuli.php?maloai= <?= $danhmuc['ma_loai'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> |
                    <a href="?action=danhmucsanpham&query=sua&maloai= <?= $danhmuc['ma_loai'] ?>"><img class="xoa" src="./img/pencil.png" alt=""></a>

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