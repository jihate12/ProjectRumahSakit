<?php
		include 'koneksi.php';
		if (isset($_POST['input'])) {
			$nik = $_POST['nik'];
			$nama = $_POST['nama'];
			$tanggal = $_POST['tanggal'];
			$gender = $_POST['gender'];
			$alamat = $_POST['alamat'];
			$tinggal = $_POST['tinggal'];
			if (isset($_POST['hobi'])) {
				$hobi = implode(' , ',$_POST['hobi']);
			}

			// $query = mysqli_query($conn,$query);
			
		}
		$query =mysqli_query ($conn,"insert into form_kartunama (nik,nama,tgl_lahir,jenis_kelamin,alamat,tinggal_di,hobby) values ('$nik','$nama','$tanggal','$gender','$alamat','$tinggal','$hobi')");
			if ($query) {
					echo "input berhasil";
				}
				else {
					echo "input gagal";
				}
				mysqli_close($conn);
				header("location:lihat.php");
?>