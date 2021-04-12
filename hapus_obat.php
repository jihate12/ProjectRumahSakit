<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		include 'cone.php';
		$ress = mysqli_query(
			$conn, "delete from obat where BPOM = '$id'"
		);

		if ($ress) {
			// echo "Tambah produk Berhasil<br>";
			// echo "<a href='form.php>Kembali</a>'";
			header('location: viewobat.php');
		} else {
			echo "hapus obat gagal";
			echo "<a href='form_tambah_obat.php>Kembali</a>'";
		}
		
	}else{
		header('location:viewobat.php');
	}
?>