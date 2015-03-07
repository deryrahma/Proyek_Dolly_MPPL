<?php
	$username = "umum";
	$password = "";
	$hostname = "10.151.31.107"; 

	//connection to the database
	$conn = mysql_connect($hostname, $username, $password, "mppl_baru") 
	 or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";

	//close the connection
	//mysql_close($conn);
?>