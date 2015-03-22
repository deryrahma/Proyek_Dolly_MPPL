<?php
	
	include "../connection.php";

	$nama_kasuh = $_POST['nama_kasuh'];
	$alamat_kasuh = $_POST['alamat_kasuh'];
	$telp_kasuh = $_POST['telp_kasuh'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$foto_kakak = addslashes(file_get_contents($_FILES['foto_kakak']['tmp_name']));

	$sql = "INSERT INTO KAKAK_ASUH(NAMA_KAKAK, ALAMAT_KAKAK, NO_TELPON_KAKAK, USERNAME, PASSWORD, FOTO_KAKAK) VALUES (" . "\"$nama_kasuh\"" . "," . "\"$alamat_kasuh\"" . "," . "\"$telp_kasuh\"" . "," . "\"$username\"" . "," . "\"$password\"" . "," . "\"$foto_kakak\"" . ")";

//echo '<img src="data:image/jpeg;base64,'.base64_encode( $foto_kakak ).'"/>';

	//echo $sql;

	mysql_query($sql);
	header('location:adm_lihat_kakak.php');

?>