<?php
	if (isset($_POST['id_dokter'])){
		include 'cone.php';
		$id = $_POST['id_dokter'];
		$bpom = $_POST['BPOM'];
		$nama = $_POST['nama_dokter'];
		$spe = $_POST['spesialis_dokter'];
		$sta = $_POST['status_dokter'];

		$res = mysqli_query($conn,"insert into dokter values ('$id','$bpom','$nama','$spe','$sta')");
		if($res){ //berhasil
			echo "tambah data dokter berhasil<br>";
			echo "<a href='viewdokter.php'>view dokter</a>";
		}
		else{ //gagal
			echo "tambah data dokter gagal<br>";
			echo mysqli_error($conn)."<br>";
			echo "<a href='form_tambah_dokter.php'>kembali</a>";
		}
	} else {
		header('location:form_tambah_dokter.php');
	}
	mysqli_close($conn);
	// header('location:viewproduk.php');
?>