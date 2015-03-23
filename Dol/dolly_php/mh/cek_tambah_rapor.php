<?php
	//0 = id_anak
	//1 = jadwal_pelatihan
	//2 = id_parameter
	//3 = val nilai
	//4 = id_pelatihan

	include '../connection.php';
	$tampung = $_POST['nilai'];
	print_r($tampung);
	$c = count($tampung);
	for ($i=0; $i < $c; $i++) { 

		$query = "SELECT * FROM jadwal_pelatihan WHERE jadwal_pelatihan.JADWAL_PELATIHAN='" . $tampung[$i][1] . "' AND jadwal_pelatihan.ID_PELATIHAN=" . $tampung[$i][4];
		echo "<br>id_jadwal" . $query . "<br>";
		$result = mysql_query($query);
	    if($result)
	    {
	      while($row = mysql_fetch_array($result))
	      {
	      	$id_jadwal = $row['ID_JADWAL'];
	      }
	  	}

	 	$query = "INSERT INTO rapor_harian VALUES (''," . $tampung[$i][0] . "," . $id_jadwal . "," . $tampung[$i][2] . "," .$tampung[$i][3] . ")";
		echo "<BR>" . $query;
		if(mysql_query($query)){
			header('location:mh_anak_harian.php?id_pelatihan=' . $tampung[0][4] . '&&jadwal_pelatihan=' . $tampung[0][1]);
		}
	 }

?>