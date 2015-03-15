<?php
	
	include "../connection.php";

	echo "halo";
	$id_kakak = $_GET['id_kakak'];
	

	$sql = "delete from KAKAK_ASUH where ID_KAKAK='$id_kakak'";


	mysql_query($sql);
	header('location:adm_hapus_kakak.php');

?>


