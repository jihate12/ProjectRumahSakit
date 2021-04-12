<?php
	$konceksi = mysqli_connect('localhost','root','','percobaan');
	$select = "select * from orang";

	$view =	mysqli_query($konceksi,$select);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modul 9</title>
</head>
<body>
	<?php while ($lihat = mysqli_fetch_array($view)) { ?>
	<form>
		<span>ID</span>
		<span> : <?= $lihat['id']; ?> </span><br>

		<span>Nama</span>
		<span> : <?= $lihat['nama']; ?> </span> <br>
		<br>	
	</form>
	<?php } ?>
</body>
</html>