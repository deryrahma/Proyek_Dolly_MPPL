<?php
	
	include "../connection.php";

	//$id_pelatihan = $_POST['id_pelatihan'];
	$nama_pelatihan = $_POST['nama_pelatihan'];
	

	$sql = "INSERT INTO pelatihan(NAMA_PELATIHAN) VALUES (".  "\"$nama_pelatihan\" ".")";



	//echo $sql;

	mysql_query($sql);
	header('location:adm_tambah_parameter.php?nama_pelatihan='. $nama_pelatihan);

	//\"adm_hapus_k.php?id_kakak=" . $row['ID_KAKAK'] . "\"

?>