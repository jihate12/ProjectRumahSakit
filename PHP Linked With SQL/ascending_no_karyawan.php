<?php
	$koneksi = mysqli_connect('localhost','root','','jurnalmod9');
	$asc = "select * from karyawan order by no_karyawan asc";

	$view = mysqli_query($koneksi,$asc);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ASC||DESC</title>
</head>
<body>
	<a href="ascending_no_karyawan.php">ASCENDING NO KARYAWAN</a> || <a href="descending_nama.php">DESCENDING NAMA KARYAWAN</a>
	<br>
	<br>
	<table border="1px">
		<tr>
			<td>id</td>
			<td>No Karyawan</td>
			<td>Nama Karyawan</td>
			<td>Divisi Kerja</td>
			<td>No Telepon</td>
			<td>Jenis Kelamin</td>
		</tr>
		<?php while ($liat = mysqli_fetch_array($view)) { ?>
			<tr>
				<td><?=$liat['id'] ?></td>
				<td><?=$liat['no_karyawan'] ?></td>
				<td><?=$liat['nama'] ?></td>
				<td><?=$liat['divisi_kerja'] ?></td>
				<td><?=$liat['no_tlp'] ?></td>
				<td><?=$liat['jenis_kelamin'] ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>