<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		include 'cone.php';
		$ress = mysqli_query(
			$conn, "select * from produk where id_produk = '$id'"
		);

		if (isset($_POST['id_produk'])) {
			$id_baru = $_POST['id_produk'];
			$nama = $_POST['nama_produk'];
			$harga = $_POST['harga'];
			include 'cone.php';
			$ress = mysqli_query(
				$conn, "update produk set id_produk ='$id_baru',nama_produk ='$nama',harga ='$harga' where id_produk='$id'"
			);

			if ($ress) {
				// echo "Tambah produk Berhasil<br>";
				// echo "<a href='form.php>Kembali</a>'";
				header('location: view_produk.php');
			} else {
				echo "Tambah produk gagal";
				echo "<a href='form.php>Kembali</a>'";
			}
		} else {
			$ress = mysqli_query($conn,"select * from produk where id_produk = '$id'");

			if ($data = mysqli_fetch_array($ress)) {
				
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah produk</title>
</head>
<body>
	<h2><b>Ubah Produk</b></h2>
	<table>
		<form method="post">
			<tr>
				<td>ID Produk</td>
				<td> : <input type="text" name="id_produk" value="<?php echo $data['id_produk'];?>"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td> : <input type="text" name="nama_produk" value="<?php echo $data['nama_produk'];?>"></td>
			</tr>
			<tr>
				<td>Harga Produk</td>
				<td> : <input type="number" name="harga" value="<?php echo $data['harga'];?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="ubah"></td>
			</tr>
		</form>
	</table>
</body>
</html>

<?php
			} else{
				// header('location: view_produk.php');
			}
		}
	}else{
		header('location: view_produk.php');
	}
	
?>