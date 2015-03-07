<?php
	
	include "connection.php";

	$nama_anak = $_POST['nama_anak'];
	$jk_anak = $_POST['jk_anak'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$agama = $_POST['agama'];
	$anak_ke = $_POST['anak_ke'];
	$alamat_siswa = $_POST['alamat_siswa'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$kelas = $_POST['kelas'];
	$sekolah_asal = $_POST['sekolah_asal'];
	$alamat_sekolah = $_POST['alamat_sekolah'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$alamat_ortu = $_POST['alamat_ortu'];
	$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
	$nama_kakak = $_POST['nama_kakak'];
	$alamat_kakak = $_POST['alamat_kakak'];
	$no_telp_kakak = $_POST['no_telp_kakak'];

	$sql = "INSERT INTO anak_binaan	VALUES ($nama_anak, $jk_anak, $tempat_lahir, $tanggal_lahir, $agama, $anak_ke, $alamat_siswa, $tanggal_masuk, $kelas, $sekolah_asal, $alamat_sekolah, $nama_ayah, $nama_ibu, $alamat_ortu, $pekerjaan_ayah, $pekerjaan_ibu, $nama_kakak, $alamat_kakak, $no_telp_kakak)";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo "sip";

?>