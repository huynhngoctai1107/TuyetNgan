<?php
 
$mysqli = new mysqli("localhost", "root", "", "du_an_mau");
$sql_accout = "SELECT * FROM khach_hang where  ma_kh = '$_GET[id]'  ";
$query_accout = mysqli_query($mysqli, $sql_accout);
?>



<?php
while ($row_accout = mysqli_fetch_array($query_accout)) {
?>

 
<?php

    if (isset($_POST['gui'])) {
        $hinh = $_POST['hinh'];
        $sql_doihinh = "UPDATE khach_hang SET hinh='" . $hinh . "' where ma_kh = ' $_GET[id]' ";
        mysqli_query($mysqli, $sql_doihinh);

        header('Location: acout.php');
    } else if (isset($_POST['suaten'])) {
        $ten = $_POST['ten'];
        $sql_doihinh = "UPDATE khach_hang SET ho_ten='" . $ten . "' where ma_kh = ' $_GET[id]' ";
        mysqli_query($mysqli, $sql_doihinh);
         header('Location: acout.php');
       
     
    } else if (isset($_POST['suamk'])) {
        $mkc = $row_accout['mat_khau'];
        $mk = $_POST['matkhauht'];
        $mk1 = $_POST['matkhaumoi'];
        $mk2 = $_POST['matkhaunl'];
        if ($mkc == $mk) {

            if ($mk1 == $mk2 && $mk != $mk1) {
                $sql_doihinh = "UPDATE khach_hang SET mat_khau='" . $mk1 . "' where ma_kh = ' $_GET[id]'  ";
                mysqli_query($mysqli, $sql_doihinh);
                session_start();
                session_unset();
                session_destroy();
                header('Location: login.php');
            } else {


                header('Location: acout.php');
            }
        } else {
            header('Location: acout.php');
        
        }
    }else{
        session_start();
        session_unset();
        session_destroy();
        header('Location: login.php');
    }
?>




 <?php }
    ?>


 





