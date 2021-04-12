<?php
	if (isset($_POST['username'])){
		include 'cone.php';
		$usr = $_POST['username'];
		$pswd = $_POST['password'];
		$rl = $_POST['role'];

		$res = mysqli_query($conn,"insert into user values ('$usr',sha1('$pswd'),'$rl')");
		if($res){ //berhasil
			echo "tambah User berhasil<br>";
			echo "<a href='home.php'>Kembali</a>";
		}
		else{ //gagal
			echo "tambah User gagal<br>";
			echo mysqli_error($conn)."<br>";
			echo "<a href='form_tambah_user.php'>kembali</a>";
		}
	} else {
		header('location:form_tambah_user.php');
	}
	mysqli_close($conn);
	// header('location:viewproduk.php');
?>