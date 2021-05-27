<?php
session_start();
include('db.php');

if ($db_config) {
	// echo "connection successfull";
}else {
	header("Location: db.php");
}


if (!$_SESSION['username']) {
	header("Location: login.php");
}
?>