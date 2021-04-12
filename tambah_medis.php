<?php
	if (isset($_POST['id_rekam_medis'])){
		include 'cone.php';
		$id = $_POST['id_rekam_medis'];
		$pasi = $_POST['id_pasien'];
		$dok = $_POST['id_dokter'];
		// $hasil = $_POST['hasil'];

		$res = mysqli_query($conn,"insert into rekam_medis values ('$id','$pasi','$dok')");
		if($res){ //berhasil
			echo "tambah data medis berhasil<br>";
			echo "<a href='viewmedis.php'>view Rekam Medis</a>";
		}
		else{ //gagal
			echo "tambah data medis gagal<br>";
			echo mysqli_error($conn)."<br>";
			echo "<a href='form_tambah_medis.php'>kembali</a>";
		}
	} else {
		header('location:form_tambah_medis.php');
	}
	mysqli_close($conn);
	// header('location:viewproduk.php');
?>