<?php
	include 'bebas.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>coba PHP</title>
</head>
<body>
	<?php
		echo 'ini dari PHP';
		echo '<br />';
		$v = 'tralala';
		$x = 3;
		echo 'ini dari var : '.$v. ' dan '.$x;
		echo '<br />contoh operasi nomerik : 2 + 3 = '.($x+2);
		$arr1[0] ='holla';
		$arr1['ini']='yayaya';
		echo '<br / >ini dari array: '.$arr1['ini'].$arr1[0];
		echo '<br/> info dari server : '.$_SERVER['HTTP_HOST'];
		for ($i=1;$i<7;$i++){
			echo '<h'.$i.'>header'.$i.'</h'.$i.'>';
		}
		$arr1['ok'] = 'yaha';
		$arr1['nah'] = 'yuhu';
		$arr1['cuy'] = 'yihi';
		foreach ($arr1 as $isi) {
			echo $isi.'<br/>';
		}
		cobatulis('okeeeeee');
		cobatulis('ngoding');
	?>
</body>
</html>