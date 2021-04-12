<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		include 'cone.php';
		$ress = mysqli_query(
			$conn, "delete from dokter where id_dokter = '$id'"
		);

		if ($ress) {
			// echo "Tambah produk Berhasil<br>";
			// echo "<a href='form.php>Kembali</a>'";
			header('location: viewdokter.php');
		} else {
			echo "hapus dokter gagal";
			echo "<a href='form_tambah_dokter.php>Kembali</a>'";
		}
		
	}else{
		header('location:viewdokter.php');
	}
?>