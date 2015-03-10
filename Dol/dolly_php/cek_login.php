<?php
include 'connection.php';

session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

$user = $_POST['username'];
$pass = $_POST['password'];

$ada = false;
$result = mysql_query("SELECT * FROM kakak_asuh");
while ($row = mysql_fetch_array($result)) {
	if ($row['USERNAME'] == $user AND $row['PASSWORD'] == $pass) {
		$ada = true;
		if ($row['USERNAME'] == "admin") {
			header('adm/adm_panel.php');
		} else {
			header('mh/mh_panel.php');
		}
	}
}

if(!$ada){
	header('index.php');
}

?>