<?php
	
	include "../connection.php";

	$nama_kasuh = $_POST['nama_kasuh'];
	$alamat_kasuh = $_POST['alamat_kasuh'];
	$telp_kasuh = $_POST['telp_kasuh'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO KAKAK_ASUH(NAMA_KAKAK, ALAMAT_KAKAK, NO_TELPON_KAKAK, USERNAME, PASSWORD) VALUES (" . "\"$nama_kasuh\"" . "," . "\"$alamat_kasuh\"" . "," . "\"$telp_kasuh\"" . "," . "\"$username\"" . "," . "\"$password\"" . ")";



	//echo $sql;

	mysql_query($sql);
	header('location:adm_lihat_kakak.php');

?>