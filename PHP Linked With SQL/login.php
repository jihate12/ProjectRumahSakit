<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<style>
		form {
			width: 200px;
			margin: auto;
			border:  solid 1px black;
			padding: 10px;
			margin-top: 100px;
		}
		h2 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h2><b>LOGIN DOELOE</b></h2>
	<table>
		<form method="post" action="proseslogin.php">
			Username :
			<input type="text" name="username">
			<br>
			<br>
			Password :
			<input type="password" name="password">
			<br>
			<br>
			<input type="submit" name="login">
			<br>
			<?php
				session_start();
				if (isset($_SESSION['pesan'])) {
					echo $_SESSION['pesan'];
				}
			?>
		</form>
	</table>
</body>
</html>