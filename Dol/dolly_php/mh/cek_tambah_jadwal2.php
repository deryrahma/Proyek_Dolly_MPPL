<?php
	
	include "../connection.php";
	$tanggal_lap_mingguan = $_POST['tanggal_lap_mingguan'];	
	
	$id_pelatihan = $_POST['id_pelatihan'];

	$sql = "SELECT * FROM jadwal_pelatihan WHERE ID_PELATIHAN=" . $id_pelatihan . " AND JADWAL_PELATIHAN='" . $tanggal_lap_mingguan . "'";
	$result = mysql_query($sql);
	$flag = 0;
	if($result)
    {
        while($row = mysql_fetch_array($result))
        {
        	$flag = 1;
        }
    }
	if($flag == 1){
		header('location:mh_anak_mingguan.php?id_pelatihan=' . $id_pelatihan . '&&tanggal_lap_mingguan=' . $tanggal_lap_mingguan);	
	} else {
		echo $sql . "<br>";
		$sql = "INSERT INTO jadwal_pelatihan (ID_PELATIHAN, JADWAL_PELATIHAN) VALUES (" . $id_pelatihan . " , '" . $tanggal_lap_mingguan . "')";
		if (mysql_query($sql)) {
			header('location:mh_anak_mingguan.php?id_pelatihan=' . $id_pelatihan . '&&tanggal_lap_mingguan=' . $tanggal_lap_mingguan);
		} else {
			echo $sql . "<br />";
			//header('location:mh_harian.php');
		}
	}

?>