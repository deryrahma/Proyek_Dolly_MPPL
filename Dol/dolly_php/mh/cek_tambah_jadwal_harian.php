<?php
	
	include "../connection.php";
	
	$jadwal_pelatihan = $_GET['jadwal_pelatihan'];
	$id_pelatihan = $_GET['id_pelatihan'];

	$sql = "SELECT * FROM jadwal_pelatihan WHERE ID_PELATIHAN=" . $id_pelatihan . " AND JADWAL_PELATIHAN='" . $jadwal_pelatihan . "'";
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
		header('location:mh_anak_harian.php?id_pelatihan=' . $id_pelatihan . '&&jadwal_pelatihan=' . $jadwal_pelatihan);	
	} else {
		echo $sql . "<br>";
		$sql = "INSERT INTO jadwal_pelatihan (ID_PELATIHAN, JADWAL_PELATIHAN) VALUES (" . $id_pelatihan . " , '" . $jadwal_pelatihan . "')";
		if (mysql_query($sql)) {
			header('location:mh_anak_harian.php?id_pelatihan=' . $id_pelatihan . '&&jadwal_pelatihan=' . $jadwal_pelatihan);
		} else {
			echo $sql . "<br />";
			//header('location:mh_harian.php');
		}
	}

?>