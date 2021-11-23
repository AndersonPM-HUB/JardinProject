<?php

session_start();

$_SESSION = array();

session_destroy();

header("location: Login_students.php");

exit;

 ?>
