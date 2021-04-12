<?php
	if (isset($_POST['id_pasien'])){
		include 'cone.php';
		$id = $_POST['id_pasien'];
		$nama = $_POST['nama_pasien'];
		$alamat = $_POST['alamat'];
		$tlfn = $_POST['no_tlp'];
		$jns = $_POST['jenis_pembayaran'];
		// $tanggal = $_POST['now()'];
		$res = mysqli_query($conn,"insert into pasien values ('$id','$nama','$alamat','$tlfn','$jns',now())");
		if($res){ //berhasil
			echo "tambah data pasien berhasil<br><br>";
			echo "<a href='viewpasien.php'><button class = 'btn btn-primary'>View Pasien</button></a>";
		}
		else{ //gagal
			echo "tambah data pasien gagal<br><br>";
			echo mysqli_error($conn)."<br>";
			echo "<a href='form_tambah_pasien.php'><button class='btn btn-primary'>kembali</button></a>";
		}
	} else {
		header('location:form_tambah_pasien.php');
	}
	mysqli_close($conn);
	// header('location:viewproduk.php');
?>