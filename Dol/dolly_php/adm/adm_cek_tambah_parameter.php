<?php
	
	include "../connection.php";

	//$id_pelatihan = $_POST['id_pelatihan'];
	$id_pelatihan = $_POST['id_pelatihan'];
	$nama_pelatihan = $_POST['nama_pelatihan'];
	$nama_parameter = $_POST['nama_parameter'];
	//echo $id_pelatihan;
	//echo $nama_pelatihan;

	$sql = "INSERT INTO parameter(ID_PELATIHAN, PARAMETER) VALUES (" . $id_pelatihan . "," . " \"$nama_parameter\" " . ")";



	//echo $sql;

	mysql_query($sql);
	header('location:adm_tambah_parameter.php?nama_pelatihan='. $nama_pelatihan);

?>