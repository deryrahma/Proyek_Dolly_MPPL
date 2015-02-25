<?php
	include 'connection.php';
?>
<html>
<head>
	<title>Dolly Care</title>
</head>
<body>
	<table>
		<tr>
			<td>
				<form method="post" action="cek_login.php">
					<input type="text" name="username">
					<br>
					<input type="password"name="password">
					<br>
					<input type="submit" value="Login">
				</form>
			</td>
		</tr>
	</table>
</body>
</html>