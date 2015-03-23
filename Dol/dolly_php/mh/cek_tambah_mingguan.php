<?php
	
	include "../connection.php";

	$id_anak = $_GET['id_anak'];
	$id_pelatihan = $_GET['id_pelatihan'];
	$minggu_ke = $_GET['minggu_ke'];
	$bulan_ke = $_GET['bulan_ke'];
	$tahun_ke = $_GET['tahun_ke'];

	//$tanggal_lap_mingguan = $_GET['tanggal_lap_mingguan'];
	$perilaku_yang_diamati = $_POST['perilaku_yang_diamati'];
	$perubahan_perilaku_yang_terjadi = $_POST['perubahan_perilaku_yang_terjadi'];
	$sumber_informasi = $_POST['sumber_informasi'];
	$cara_pendekatan = $_POST['cara_pendekatan'];
	$keterangan = $_POST['keterangan'];
	$cerita_menarik = $_POST['cerita_menarik'];

	$sql = 'INSERT INTO laporan_mingguan VALUES ("", "' . $id_pelatihan . '","' . $id_anak . '","' . $minggu_ke . '","' . $bulan_ke . '","' . $tahun_ke . '","' . $perilaku_yang_diamati . '","' . $perubahan_perilaku_yang_terjadi . '","' . $sumber_informasi . '","' . $cara_pendekatan .'","' . $keterangan . '","' . $cerita_menarik . '")';

	//echo $sql;

	$result = mysql_query($sql);
	if($result){
		header('location:mh_anak_mingguan.php?id_pelatihan=' . $id_pelatihan . '&&minggu_ke=' . $minggu_ke . '&&bulan_ke=' . $bulan_ke . '&&tahun_ke=' . $tahun_ke);
	} else {
		echo $sql;
	}

?>

