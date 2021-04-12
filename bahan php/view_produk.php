<?php include 'cek.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login</title>
  </head>
  <body>

    <!-- Navigasi -->
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #a0b5ce">
        <a href="index.html" class="navbar-brand">
          <img src="./image/logo_white.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
        </div> -->    
      </nav>  
    </div>
    <!-- Navigasi -->
    <div style="float: right; margin-right: 50px;">
		Halo, <?php echo $_SESSION['login']; ?>
		&nbsp; &nbsp;
		<a href="logout.php"><button>Logout</button></a>
	</div>
	<h2><b>DAFTAR PRODUK</b></h2>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>ID Produk</th>
			<th>Nama Produk</th>
			<th>Harga Produk</th>
			<th>Gambar</th>
			<th>aksi</th>
		</tr>
		<?php
			include 'cone.php';

			$res = mysqli_query($conn,
				"select * from pasien"
			);
			$no = 0;

			while ($data = mysqli_fetch_array($res)) {
				$no++;
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data['id_produk']."</td>";
				echo "<td>".$data['nama_produk']."</td>";
				echo "<td align='right'>Rp. ".$data['harga']."</td>";
				echo '<td><img width="200" src="data:image/jpeg;base64,'.base64_encode($data['gambar']).'"/>';
				echo "</td>";
				echo "<td>";
				echo '<a href="formupdateproduk.php?id='.$data['id_produk'].'"><button>ubah</button></a> &nbsp';
				echo '<button onclick="if (confirm(\'yakin hapus?\')) location.href = \'hapus_produk.php?id='.$data['id_produk'].'\'">hapus</button>';
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<br>
	<button href="form.php" action='_BLANK' class="btn btn-primary">Kembali!</button>
	<a href="form.php">Tambah Produk!</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>