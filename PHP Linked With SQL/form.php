<!DOCTYPE html>
<html>
<head>
	<title>Form Produk</title>
</head>
<body>
	<h2><b>TAMBAH PRODUK BARU!</b></h2>
	<table>
		<form method="post" action="tambah_produk.php" enctype="multipart/form-data">
			<tr>
				<td>ID Produk</td>
				<td> : <input type="text" name="id_produk"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td> : <input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Harga Produk</td>
				<td> : <input type="number" name="harga"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td> : <input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</form>
	</table>
</body>
</html>