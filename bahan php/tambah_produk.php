<?php
	include 'cone.php';
	if (isset($_POST['id_pasien'])) {
		$id = $_POST['id_pasien'];
		$nama = $_POST['nama_pasien'];
		$alamat = $_POST['alamat'];
		$tlfn = $_POST['no_tlp'];
		$jnis = $_POST['jenis_pembayaran'];
		if($_FILES['gambar']['name']){
			$gmbr = file_get_contents($_FILES['gambar']['tmp_name']);

			$gmbr = mysqli_real_escape_string($conn,$gmbr);
		}else{
			$gmbr = '';
		}
		$ress = mysqli_query(
			$conn, "insert into produk values ('$id','$nama','$harga','$gmbr')"
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