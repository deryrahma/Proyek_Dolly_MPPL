<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$conn = mysql_connect($hostname, $username, $password) 
	 or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";

	//select a database to work with
	$selected = mysql_select_db("mppl",$conn) 
	  or die("Could not select discovery");
	
	//close the connection
	//mysql_close($conn);
?>