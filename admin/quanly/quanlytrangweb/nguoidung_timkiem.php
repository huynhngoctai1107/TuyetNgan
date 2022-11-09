<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">




<?php
if (isset($_POST['timkiem2'])) {
    $tukhoa = $_POST['tukhoa2'];
}
$sql_pro = "SELECT * FROM khach_hang
    WHERE  khach_hang.ho_ten LIKE '%" . $tukhoa . "%' ";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>

<table class="xuat">
    <tr>
        <th>ID</th>
        <th>Tên người đăng ký </th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>Hình</th>
        <th>Quản lý</th>

    </tr>
    <?php
    $i = -1;
    while ($danhmuc = mysqli_fetch_array($query_pro)) {
        $i++;
    ?>
           <tr>
                <td> <?php echo $danhmuc['ma_kh'] ?> </td>
                <td> <?php echo $danhmuc['ho_ten'] ?> </td>
                <td> <?php echo $danhmuc['mat_khau']  ?> </td>
                <td> <?php echo $danhmuc['email'] ?> </td>
                <td> <img src="../images/<?php echo $danhmuc['hinh'] ?> " width="200" alt=""> </td>
                <td>
                    <a href="../admin/quanly/quanlytrangweb/nguoidung_xuli.php?ma_kh= <?= $danhmuc['ma_kh'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> 
                  
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