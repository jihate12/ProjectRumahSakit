<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		include 'cone.php';
		$ress = mysqli_query(
			$conn, "delete from rekam_medis where id_rekam_medis = '$id'"
		);

		if ($ress) {
			// echo "Tambah produk Berhasil<br>";
			// echo "<a href='form.php>Kembali</a>'";
			header('location: viewmedis.php');
		} else {
			echo "hapus rekam medis gagal";
			echo "<a href='form_tambah_medis.php>Kembali</a>'";
		}
		
	}else{
		header('location:viewmedis.php');
	}
?>