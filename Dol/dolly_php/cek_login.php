<?php
include 'connection.php';

session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

$user = $_POST['username'];
$pass = $_POST['password'];

$ada = false;
$result = mysql_query("SELECT * FROM pemerintah");
while ($row = mysql_fetch_array($result)) {
	if ($row['USERNAME'] == $user AND $row['PASSWORD'] == $pass) {
		$ada = true;
		if ($row['JABATAN'] == "lurah") {
			header('lurah_panel.php');
		} else if ($row['JABATAN'] == "rt") {
			header('rt_panel.php');
		} else {
			echo "anda RW";
		}
	}
}

if(!$ada){
	echo "username / password salah";
}

?>