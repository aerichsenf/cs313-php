<?php
session_start();
session_destroy();

$_SESSION['del_id'];
unset($_GET['del_id']);

header ("Location: home.php");

