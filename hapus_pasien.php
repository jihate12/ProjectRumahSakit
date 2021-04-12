<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		include 'cone.php';
		$ress = mysqli_query(
			$conn, "delete from pasien where id_pasien = '$id'"
		);

		if ($ress) {
			// echo "Tambah produk Berhasil<br>";
			// echo "<a href='form.php>Kembali</a>'";
			header('location: viewpasien.php');
		} else {
			echo "hapus pasien gagal";
			echo "<a href='form_tambah_pasien.php>Kembali</a>'";
		}
		
	}else{
		header('location:viewpasien.php');
	}
?>