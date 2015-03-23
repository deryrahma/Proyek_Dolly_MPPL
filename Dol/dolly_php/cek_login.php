<?php
include 'connection.php';

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

$ada = false;
$result = mysql_query("SELECT * FROM kakak_asuh");
while ($row = mysql_fetch_array($result)) {
	if ($row['USERNAME'] == $user AND $row['PASSWORD'] == $pass) {
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $pass;
		$_SESSION['id_kakak'] = $row['ID_KAKAK'];
		$ada = true;
		if ($row['USERNAME'] == "admin") {
			header('location:adm/adm_panel.php');
		} else {
			header('location:mh/mh_panel.php');
			echo $_SESSION['id_kakak'];
		}
	}
}

if(!$ada){
	header('location:index.php');
}

?>