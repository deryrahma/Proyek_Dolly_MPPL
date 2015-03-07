<?php
	$username = "mpplbaru";
	$password = "";
	$hostname = "10.151.31.107"; 

	//connection to the database
	$conn = mysql_connect($hostname, $username, $password) 
	 or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";

	mysql_select_db("mppl_baru") or die("could not select database");
	//echo "fine";
	//close the connection
	//mysql_close($conn);
?>