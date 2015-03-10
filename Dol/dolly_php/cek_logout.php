<?php
	session_start();
	$id_kakak = $_SESSION['id_kakak'];
	session_destroy();
	header("location:index.php");
?>