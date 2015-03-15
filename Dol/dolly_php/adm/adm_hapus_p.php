<?php
	
	include "../connection.php";

	echo "halo";
	$id_pelatihan = $_GET['id_pelatihan'];
	

	$sql = "delete from PELATIHAN where ID_PELATIHAN='$id_pelatihan'";


	mysql_query($sql);
	header('location:adm_hapus_pelatihan.php');

?>


