<?php
	if (isset($_POST['id_pasien'])){
		include 'conn.php';
		$id = $_POST['id_pasien'];
		$nama = $_POST['nama_pasien'];
		$alamat = $_POST['alamat'];
		$tlfn = $_POST['no_tlp'];
		$jns = $_POST['jenis_pembayaran'];
		$res = mysqli_query($conn,"insert into produk values ('$id','$nama','$alamat','$tlfn','jns')");
		if($res){ //berhasil
			echo "tambah data pasien berhasil<br>";
			echo "<a href='viewpasien.php'>view produk</a>";
		}
		else{ //gagal
			echo "tambah data pasien gagal<br>";
			echo mysqli_error($conn)."<br>";
			echo "<a href='formtambahproduk.php'>kembali</a>";
		}
	} else {
		header('location:formtambahproduk.php');
	}
	mysqli_close($conn);
	// header('location:viewproduk.php');
?>