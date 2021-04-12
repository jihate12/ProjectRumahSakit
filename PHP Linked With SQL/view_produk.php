<?php include 'cek.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pasien</title>
</head>
<body>
	<div style="float: right; margin-right: 50px;">
		Halo, <?php echo $_SESSION['login']; ?>
		&nbsp; &nbsp;
		<a href="logout.php"><button>Logout</button></a>
	</div>
	<h2><b>DAFTAR Pasien</b></h2>
	<table border="1px">
		<tr>
			<th>No</th>
			<th>ID Pasien</th>
			<th>Nama Pasien</th>
			<th>Harga Produk</th>
			<th>Gambar</th>
			<th>aksi</th>
		</tr>
		<?php
			include 'cone.php';

			$res = mysqli_query($conn,
				"select * from produk"
			);
			$no = 0;

			while ($data = mysqli_fetch_array($res)) {
				$no++;
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data['id_produk']."</td>";
				echo "<td>".$data['nama_produk']."</td>";
				echo "<td align='right'>Rp. ".$data['harga']."</td>";
				echo '<td><img width="200" src="data:image/jpeg;base64,'.base64_encode($data['gambar']).'"/>';
				echo "</td>";
				echo "<td>";
				echo '<a href="formupdateproduk.php?id='.$data['id_produk'].'"><button>ubah</button></a> &nbsp';
				echo '<button onclick="if (confirm(\'yakin hapus?\')) location.href = \'hapus_produk.php?id='.$data['id_produk'].'\'">hapus</button>';
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<br>
	<button href="form.php" action='_BLANK'>Kembali!</button>
	<a href="form.php">Tambah Produk!</a>
</body>
</html>