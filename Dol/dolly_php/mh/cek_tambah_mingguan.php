<?php
	
	include "../connection.php";

	$id_anak = $_GET['id_anak'];

	
	
	$tanggal_lap_mingguan = $_GET['tanggal_lap_mingguan'];
	$perilaku_yang_diamati = $_POST['perilaku_yang_diamati'];
	$perubahan_perilaku_yang_terjadi = $_POST['perubahan_perilaku_yang_terjadi'];
	$sumber_informasi = $_POST['sumber_informasi'];
	$cara_pendekatan = $_POST['cara_pendekatan'];
	$keterangan = $_POST['keterangan'];
	$cerita_menarik = $_POST['cerita_menarik'];

	$sql = 'INSERT INTO laporan_mingguan VALUES ("", "' . $id_anak . '","' . $tanggal_lap_mingguan . '","' . $perilaku_yang_diamati . '","' . $perubahan_perilaku_yang_terjadi . '","' . $sumber_informasi . '","' . $cara_pendekatan .'","' . $keterangan . '","' . $cerita_menarik . '")';

	//echo $sql;

	mysql_query($sql);
	header('location:mh_nilai_mingguan.php');

?>

