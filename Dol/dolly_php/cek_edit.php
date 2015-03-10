<?php
	
	include "connection.php";

	$id_anak = $_POST['id_anak'];
	$id_kakak = $_POST['id_kakak'];
	$nama_anak = $_POST['nama_anak'];
	$jk_anak = $_POST['jk_anak'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
	$agama = $_POST['agama'];
	$anak_ke = $_POST['anak_ke'];
	$alamat_siswa = $_POST['alamat_siswa'];
	$tanggal_masuk = date("Y-m-d", strtotime($_POST['tanggal_masuk']));
	$kelas = $_POST['kelas'];
	$nama_sekolah = $_POST['nama_sekolah'];
	$sekolah_asal = $_POST['sekolah_asal'];
	$alamat_sekolah = $_POST['alamat_sekolah'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$alamat_ortu = $_POST['alamat_ortu'];
	$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];

	$sql = 'UPDATE anak_binaan	SET ID_KAKAK = "' . $id_kakak . '", NAMA_ANAK = "' . $nama_anak . '", JK_ANAK = "' . $jk_anak . '", TEMPAT_LAHIR = "' . $tempat_lahir . '", TANGGAL_LAHIR = "' . $tanggal_lahir . '", AGAMA = "' . $agama . '", ANAK_KE = "' . $anak_ke . '", ALAMAT_SISWA = "' . $alamat_siswa . '", TANGGAL_MASUK = "' . $tanggal_masuk . '", KELAS = "' . $kelas . '", SEKOLAH_ASAL = "' . $sekolah_asal . '", NAMA_SEKOLAH = "' . $nama_sekolah . '", ALAMAT_SEKOLAH = "' . $alamat_sekolah . '", NAMA_AYAH = "' . $nama_ayah . '", NAMA_IBU = "' . $nama_ibu . '", ALAMAT_ORTU = "' . $alamat_ortu . '", PEKERJAAN_AYAH = "' . $pekerjaan_ayah . '", PEKERJAAN_IBU = "' . $pekerjaan_ibu. '" WHERE ID_ANAK = "' . $id_anak . '"';

	mysql_query($sql);
	echo $sql;
	header('location:mh_edit_pilih.php');
?>