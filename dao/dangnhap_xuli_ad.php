<?php
    session_start();
    include("pdo.php");
    if (isset($_POST['dangnhap1'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM khach_hang WHERE email='" . $username . "' AND mat_Khau='" . $password . "' and vai_tro = 1  LIMIT 1   ";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $_SESSION['dangnhap1'] = $username;
            header("Location: ../admin/index.php?action=trangchu&query=them");
        } else {
            header("Location: ../admin/dangnhap.php ");
        }
    }
    ?>