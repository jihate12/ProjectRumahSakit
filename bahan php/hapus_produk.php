<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		include 'cone.php';
		$ress = mysqli_query(
			$conn, "delete from produk where id_produk = '$id'"
		);

		if ($ress) {
			// echo "Tambah produk Berhasil<br>";
			// echo "<a href='form.php>Kembali</a>'";
			header('location: view_produk.php');
		} else {
			echo "Tambah produk gagal";
			echo "<a href='form.php>Kembali</a>'";
		}
		
	}else{
		header('location:view_produk.php');
	}
?>