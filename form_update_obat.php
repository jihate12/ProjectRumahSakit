<?php
 if (isset($_GET['id'])){
		//load form update
		include 'cone.php';
		$id = $_GET['id'];
		if (isset($_POST['BPOM'])){
			$id_p = $_POST['BPOM'];
			$nama = $_POST['nama_obat'];
			$mrk = $_POST['merk_obat'];
			$jns = $_POST['jenis_obat'];
			$prds = $_POST['produsen_obat'];
		
			$yu = mysqli_query($conn,"update obat set BPOM='$id_p',nama_obat='$nama',merk_obat = '$mrk',jenis_obat = '$jns',produsen_obat = '$prds' where BPOM='$id'");
			if($yu){ //berhasil
				echo "Ubah obat berhasil<br>";
				echo "<a href='viewobat.php'>view obat</a>";
			}
			else{ //gagal
				echo "Ubah obat gagal<br>";
				echo "<a href='form_update_obat.php'>kembali</a>";
			}
			//submit perubahan
		}else{
			$res = mysqli_query($conn,"select *from obat where BPOM= '$id' ");
		if($data = mysqli_fetch_array($res)){ 
			//data ada

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Tambah Pasien</title>
  </head>
  <body>
    <!-- Navigasi -->
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #a0b5ce">
        <a href="home2.php" class="navbar-brand">
          <img src="./image/logo2.png">
        </a>
        <!-- <a class="navbar-brand" href="index.html" style="font-family: Dear Audrey">PROJECT2</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
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
        <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
        </div> -->    
      </nav>  
    </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Navigasi -->

    <table class="table table-bordered table-borderless">
      <form method="post" enctype="multipart/form-data">
        <tr>
          <td>KODE BPOM</td>
          <td><input type="text" name="BPOM" class="form-control" value="<?php echo $data['BPOM']; ?>"></td>
        </tr>
        <tr>
          <td>Nama obat</td>
          <td><input type="text" name="nama_obat" class="form-control" value="<?php echo $data['nama_obat']; ?>"></td>
        </tr>
        <tr>
          <td>merek obat</td>
          <td><input type="text" name="merk_obat" class="form-control" value="<?php echo $data['merk_obat']; ?>"></td>
        </tr>
          <tr>
            <td>jenis obat</td>
            <td>
              <div class="form-check form-check-inline">
                <input type="radio" name="jenis_obat" class="form-check-input" checked value="Capsul" placeholder="<?php echo $data['jenis_obat']; ?>">
                <label class="form-check-label">
                 CAPSUL
                </label>
              </div>
              <div class=" form-check form-check-inline">
              <input type="radio" name="jenis_obat" class="form-check-input" checked value="Cair" pleaceholder="<?php echo $data['jenis_obat']; ?>">
              <label class="form-check-label">
              CAIR
              </label>
            </div>
            <div class=" form-check form-check-inline">
            <input type="radio" name="jenis_obat" class="form-check-input" checked value="Tablet" placeholder="<?php echo $data['jenis_obat']; ?>">
              <label class="form-check-label">
                  TABLET
              </label>
              </div>  
            </td>
          </tr>
          <tr>
            <td>Produsen Obat</td>
            <td><input type="text" name="produsen_obat" class="form-control" value="<?php echo $data['produsen_obat']; ?>"></td>
          </tr>
<!--           <tr>
          <td>Gambar</td>
            <td><input type="file" name="gambar_obat" class="" placeholder=""></td>
          </tr> -->
          <tr>
            <td><input type="submit" name="tambah" class="btn btn-primary" style="margin-left: 10px;"></td>
          </tr>
      </form>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

		}else{ //gagal
			echo "update obat gagal<br>";
			echo "<a href='viewobat.php'>kembali</a>";
		}
	}
	} else {
		header('location:viewobat.php');
	}
?>