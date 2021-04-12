<?php
	session_start();
	if(isset($_POST['username'])){
		$user = $_POST['username'];
		$pass = sha1($_POST['password']);
		include 'cone.php';

		$res = mysqli_query($conn,"select * from user where username = '$user'");

		if($data = mysqli_fetch_array($res)){
			if($data['password']==$pass){
				$_SESSION['login'] = $data['username'];
				header('location: home2.php');
			}else{
				$_SESSION['pesan'] = 'password salah';
				header('location: login-test.php');
			}
		}else{
			$_SESSION['pesan'] = 'username tidak ada';
			header('location: login-test.php');
		}
	}else{
		header('location: login-test.php');
	}
?>