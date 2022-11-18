<?php
session_start();
include ('.././dao/pdo.php');
session_unset();
session_destroy();

header('location: ../../../index.php');

?>