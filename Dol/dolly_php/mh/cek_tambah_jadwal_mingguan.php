<?php
	
	include "../connection.php";
	/*
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
	*/
	$minggu_ke = $_POST['minggu_ke'];
	$bulan_ke = $_POST['bulan_ke'];
	$tahun_ke = $_POST['tahun_ke'];
	$id_pelatihan = $_POST['id_pelatihan'];

	$sql = "SELECT * FROM jadwal_pelatihan WHERE ID_PELATIHAN=" . $id_pelatihan;
	$result = mysql_query($sql);
	$flag = 0;
	if($result)
    {
        while($row = mysql_fetch_array($result))
        {
        	$jadwal_pelatihan = explode("-", $row['JADWAL_PELATIHAN']);
        	if ($jadwal_pelatihan[0] == $tahun_ke && $jadwal_pelatihan[1] == $bulan_ke){
        		if($minggu_ke == 1 && $jadwal_pelatihan[2] >= 1 && $jadwal_pelatihan[2] <= 7){
	        		$flag = 1;
	        	} else if($minggu_ke == 2 && $jadwal_pelatihan[2] >= 8 && $jadwal_pelatihan[2] <= 14){
	        		$flag = 1;
	        	} else if($minggu_ke == 3 && $jadwal_pelatihan[2] >= 15 && $jadwal_pelatihan[2] <= 21){
	        		$flag = 1;
	        	} else if($minggu_ke == 4 && $jadwal_pelatihan[2] >= 22 && $jadwal_pelatihan[2] <= 28){
	        		$flag = 1;
	        	} else if($minggu_ke == 5 && $jadwal_pelatihan[2] >= 29 && $jadwal_pelatihan[2] <= 31){
	        		$flag = 1;
	        	} 
	        	if($flag == 1){
	        		break;
	        	}
        	}
        }
    }
	if($flag == 1){
		header('location:mh_anak_mingguan.php?id_pelatihan=' . $id_pelatihan . '&&minggu_ke=' . $minggu_ke . '&&bulan_ke=' . $bulan_ke . '&&tahun_ke=' . $tahun_ke);
	} else {
		header('location:mh_nilai_mingguan.php?status="no"');
	}

?>