<?php
 if (isset($_GET['id'])){
    //load form update
    include 'cone.php';
    $id = $_GET['id'];
    if (isset($_POST['id_rekam_medis'])){
    $id_p = $_POST['id_rekam_medis'];
    $pasi = $_POST['id_pasien'];
    $dok = $_POST['id_dokter'];
    $hasil = $_POST['hasil'];
      $yu = mysqli_query($conn,"update rekam_medis set id_rekam_medis='$id_p',id_pasien='$pasi',id_dokter = '$dok' , hasil = '$hasil where id_rekam_medis='$id'");
      if($yu){ //berhasil
        echo "Ubah rekam medis berhasil<br>";
        echo "<a href='viewmedis.php'>view medis</a>";
      }
      else{ //gagal
        echo "Ubah rekam medis gagal<br>";
        echo "<a href='form_update_medis.php'>kembali</a>";
      }
      //submit perubahan
    }else{
      $res = mysqli_query($conn,"select *from rekam_medis where id_rekam_medis= '$id' ");
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

    <title>Tambah Rekam Medis</title>
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
      <form method="post" >
        <tr>
          <td>ID MEDIS</td>
          <td><input type="text" name="id_rekam_medis" class="form-control" value="<?php echo $data['id_rekam_medis']; ?>"></td>
        </tr>
        <tr>
          <td>ID PASIEN</td>
          <td><input type="text" name="id_pasien" class="form-control" value="<?php echo $data['id_pasien']; ?>"></td>
        </tr>
        <tr>
          <td>ID DOKTER</td>
          <td><input type="text" name="id_dokter" class="form-control" value="<?php echo $data['id_dokter']; ?>"></td>
        </tr>
        <tr>
          <td>Hasil Check Up</td>
          <td>
        <div class=" form-check form-check-inline">
            <input type="radio" name="hasil" class="form-check-input" value="hasil">
              <label class="form-check-label">
                  Sembuh
              </label>
              </div>
              <div class=" form-check form-check-inline">
            <input type="radio" name="hasil" class="form-check-input" value="dalam Penanganan">
              <label class="form-check-label">
                  Dalam Penanganan
              </label>
              </div>  
              <div class=" form-check form-check-inline">
            <input type="radio" name="hasil" class="form-check-input" value="Dirawat Intensif">
              <label class="form-check-label">
                  Dirawat Intensif
              </label>
              </div>    
              </tr>
              </td>
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
    <h5>Masukan Data Medis Di Form</h5>
      <img src="pasien-png-7.png" height="200px" width="150px" style="margin-left: 1050px">
  </body>
</html>


<?php

    }else{ //gagal
      echo "update rekam medis gagal<br>";
      echo "<a href='viewmedis.php'>kembali</a>";
    }
  }
  } else {
    header('location:viewmedis.php');
  }
?>