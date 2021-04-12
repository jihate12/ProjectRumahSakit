<?php
	if (isset($_POST['kode_BPOM'])){
		include 'cone.php';
		$id = $_POST['kode_BPOM'];
		$nama = $_POST['nama_obat'];
		$merk = $_POST['merk_obat'];
		$jns = $_POST['jenis_obat'];
		$pro = $_POST['produsen_obat'];
		if ($_FILES['gambar_obat']['name']) {
			$gmbr = file_get_contents($_FILES['gambar_obat']['tmp_name']);
			
			$gmbr = mysqli_real_escape_string($conn, $gmbr);
		}else{
			$gmbr = '';
		}

		$res = mysqli_query($conn,"insert into obat values ('$id','$nama','$merk','$jns','$pro','$gmbr')");
		if($res){ //berhasil
			echo "tambah data obat berhasil<br><br>";
			echo "<a href='viewobat.php'><button class = 'btn-primary'>View Obat</button></a>";
		}
		else{ //gagal
			echo "tambah data obat gagal<br>";
			echo mysqli_error($conn)."<br>";
			echo "<a href='form_tambah_obat.php'>kembali</a>";
		}
	} else {
		header('location:form_tambah_obat.php');
	}
	mysqli_close($conn);
	// header('location:viewproduk.php');
?>