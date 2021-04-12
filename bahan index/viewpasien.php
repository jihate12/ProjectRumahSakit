<?php include 'cek.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Produk</title>
</head>
<body>
	<div style="float: right; margin: ">
		Hallo,<?php  echo $_SESSION['login'] ?>
		&nbsp; &nbsp;
		<a href="logout.php"><button>login</button></a>
	</div>
	<h2>LIHAT DATA PEGAWAI</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>ID </th>
			<th>Nama </th>
			<th>alamat</th>
			<th>no telfon</th>
			<th>Pembayaran</th>
		</tr>
		<?php
			include 'conn.php';
			$res = mysqli_query($conn,"select *from pasien");
			$no=0;
			while ($data = mysqli_fetch_array($res)){
				$no++;
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data['id_pasien']."</td>";
				echo "<td>".$data['nama_produk']."</td>";
				echo "<td>".$data['alamat']."</td>";
				echo "<td align='right'>".$data['shift']."</td>";
				echo "<td>";
				echo "<a href='formupdateproduk.php?id=".$data['id_pasien']."'><button>ubah</button></a> &nbsp";
				echo "<button onclick='if(confirm(\"Yakin dihapus?\")) location.href=\"hapus_produk.php?id=".$data['id_pasien']."\"'>Hapus</button>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<br>
	<a href="tambah_produk.php">tambah</a>

</body>
</html>