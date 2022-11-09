<?php
session_start();
include ('admin/config/config.php');
session_unset();
session_destroy();

header('location: ../../index.php');

?>