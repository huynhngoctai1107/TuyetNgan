<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">




<?php
if (isset($_POST['timkiem2'])) {
    $tukhoa = $_POST['tukhoa2'];
}
$sql_pro = "SELECT * FROM lienhe
    WHERE  lienhe.ten LIKE '%" . $tukhoa . "%' ";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>

<table class="xuat">
    <tr>
        <th>ID</th>
        <th>Tên người liên hệ </th>
        <th>Email</th>
        <th>Nội dung</th>
        <th>Quản lý</th>

    </tr>
    <?php
    $i = -1;
    while ($danhmuc = mysqli_fetch_array($query_pro)) {
        $i++;
    ?>
        <tr>
            <td> <?php echo $danhmuc['id_lienhe'] ?> </td>
            <td> <?php echo $danhmuc['ten'] ?> </td>
            <td> <?php echo $danhmuc['email'] ?> </td>
            <td> <?php echo $danhmuc['noidung'] ?> </td>

            <td>
                <a href="quanly/quanlytrangweb/lienhe_xuli.php?idlienhe= <?= $danhmuc['id_lienhe'] ?>"><img class="xoa" src="./img/clear.png" alt=""></a> |


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