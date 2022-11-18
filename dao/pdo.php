<?php
$mysqli = new mysqli("localhost","root","","du_an_mau");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối mysqli lỗi".$mysqli->connect_error;
  exit();
}
?>