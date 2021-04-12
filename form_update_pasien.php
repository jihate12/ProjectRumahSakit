<?php
 if (isset($_GET['id'])){
		//load form update
		include 'cone.php';
		$id = $_GET['id'];
		if (isset($_POST['id_pasien'])){
			$id_p = $_POST['id_pasien'];
			$nama = $_POST['nama_pasien'];
			$alamat = $_POST['alamat'];
			$tlfn = $_POST['no_tlp'];
			$jns = $_POST['jenis_pembayaran'];
		  $tanggal = $_POST['tanggal'];
			$yu = mysqli_query($conn,"update pasien set id_pasien='$id_p',nama_pasien='$nama',alamat = '$alamat',no_tlp = '$tlfn',jenis_pembayaran = '$jns', tanggal = '$tanggal' where id_pasien='$id'");
			if($yu){ //berhasil
				echo "Ubah pasien berhasil<br>";
				echo "<a href='viewpasien.php'>view pasien</a>";
			}
			else{ //gagal
				echo "Ubah pasien gagal<br>";
				echo "<a href='form_update_pasien.php'>kembali</a>";
			}
			//submit perubahan
		}else{
			$res = mysqli_query($conn,"select *from pasien where id_pasien= '$id' ");
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
    <br>
    <br>
    <br>
    <!-- Navigasi -->

    <table class="table table-bordered table-borderless">
      <form method="post">
        <tr>
          <td>ID Pasien</td>
          <td><input type="text" name="id_pasien" class="form-control" value="<?php echo $data['id_pasien']; ?>"/></td>
        </tr>
        <tr>
          <td>Nama Pasien</td>
          <td><input type="text" name="nama_pasien" class="form-control" value="<?php echo $data['nama_pasien']; ?>"/></td>
        </tr>
        <tr>
          <td>alamat</td>
          <td><input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>"/></td>
        </tr>
        <tr>
          <td>No Telepon Pasien</td>
          <td><input type="text" name="no_tlp" class="form-control" value="<?php echo $data['no_tlp']; ?>"/></td>
        </tr>
          <tr>
            <td>Jenis Pembayaran</td>
            <td>
              <div class="form-check form-check-inline">
                <input type="radio" name="jenis_pembayaran" class="form-check-input" value="Cash" checked value="<?php echo $data['jenis_pembayaran']; ?>"/>
                <label class="form-check-label">
                 CASH
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" name="jenis_pembayaran" class="form-check-input" value="Debit">
                <label class="form-check-label">
                 DEBIT
                </label>
              </div>
              <div class=" form-check form-check-inline">
            <input type="radio" name="jenis_pembayaran" class="form-check-input" value="Asuransi" checked value="<?php echo $data['jenis_pembayaran']; ?>">
              <label class="form-check-label">
                  ASURANSI
              </label>
              </div>  
            </td>
          </tr>
          <!-- <tr>
            <td>Tanggal</td>
            <td><input type="date" name="tanggal" class="form-control" placeholder="<?php echo $data['tanggal']; ?>"></td>
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
			echo "update produk gagal<br>";
			echo "<a href='viewproduk.php'>kembali</a>";
		}
	}
	} else {
		header('location:viewproduk.php');
	}
?>
