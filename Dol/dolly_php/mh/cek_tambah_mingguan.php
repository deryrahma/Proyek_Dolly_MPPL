<?php
	
	include "../connection.php";

	$id_lap_mingguan = $_POST['id_lap_mingguan'];
	$hari_lap_mingguan = $_POST['hari_lap_mingguan'];
	$tanggal_lap_mingguan = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
	$perilaku_yang_diamati = $_POST['perilaku_yang_diamati'];
	$perubahan_perilaku_yang_terjadi = $_POST['perubahan_perilaku_yang_terjadi'];
	$sumber_informasi = $_POST['sumber_informasi'];
	$cara_pendekatan = $_POST['cara_pendekatan'];
	$keterangan = $_POST['keterangan'];
	$cerita_menarik = $_POST['cerita_menarik'];

	$sql = 'INSERT INTO laporan_mingguan VALUES ("", "' . $hari_lap_mingguan . '","' . $tanggal_lap_mingguan . '","' . $perilaku_yang_diamati . '","' . $perubahan_perilaku_yang_terjadi . '","' . $sumber_informasi . '","' . $keterangan . '","' . $cerita_menarik . '")';

	//echo $sql;

	mysql_query($sql);
	header('location:mh_penilaian_mingguan.php');

?>