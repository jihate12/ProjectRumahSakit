<?php include 'cek.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>view obat</title>
  </head>
  <body>
  	<div style="float: right; margin-right: 10px; margin-top: 10px;">
		Hallo,<?php  echo $_SESSION['login'] ?>
		&nbsp; &nbsp;
		<a href="logout.php"><button class="btn btn-primary">logout</button></a>
	</div>
	<div>
		<ul class="nav">
  			<li class="nav-item">
    			<a class="nav-link active" href="home2.php">Home</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link active" href="viewpasien.php">Pasien</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link active" href="viewdokter.php">Dokter</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link active" href="viewobat.php">Obat</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link active" href="viewmedis.php">Rekam Medis Pasien</a>
  			</li>
		</ul>
	</div>
	<h2>LIHAT DATA DOKTER</h2>
	<table class="table">
		<tr>
			<th>No</th>
			<th>ID </th>
			<!-- <th>Nama </th> -->
			<th>Spesialis</th>
			<th>Status</th>
			<th>Edit</th>
		</tr>
		<?php
			include 'cone.php';
			$res = mysqli_query($conn,"select *from dokter");
			$no=0;
			while ($data = mysqli_fetch_array($res)){
				$no++;
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data['id_dokter']."</td>";
				echo "<td>".$data['nama_dokter']."</td>";
				echo "<td>".$data['spesialis_dokter']."</td>";
				// echo "<td align='right'>".$data['shift']."</td>";
				echo "<td>".$data['status_dokter'];
				echo "<td>";
				echo "<a href='form_update_dokter.php?id=".$data['id_dokter']."'><button class='btn btn-primary'>ubah</button></a> &nbsp";
				echo "<button class='btn btn-danger' onclick='if(confirm(\"Yakin dihapus?\")) location.href=\"hapus_dokter.php?id=".$data['id_dokter']."\"'>Hapus</button>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<br>
	<br>
		<a href="form_tambah_dokter.php" class="btn btn-success" style="margin-left: 42%; margin-right: 0; margin-top: 1%; width: 150px;">tambah</a>
	<!-- <button href="form_tambah_pasien.php" class="btn btn-primary">Tambah</button> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  <tr>
   <img src="dokter.png" height="200px" width="150px" style="margin-left: 1050px">
  </tr>
</html>