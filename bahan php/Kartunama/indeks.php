<!DOCTYPE html>
<html>
<head>
	<title> Tugas Awal</title>
</head>
<body>

	<form action="buat.php" method="POST">
		<table>
		<tr>
			<td> NIK : </td>
			<td><input type="text" name="nik"> <br></td>
			
		</tr>

		<tr>
			<td> Nama Lengkap : </td>
			<td><input type="text" name="nama"><br></td>
		</tr>
		<tr>
			<td><label>Tgl Lahir (dd-mm-yyyy) : </label></td>
			<td><input type="date" name="tanggal"/><br></td>
		</tr>
		<tr>
			<td> Jenis Kelamin :</td>
			<td> <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
			<input type="radio" name="gender" value="Perempuan"> Perempuan<br></td>
		</tr>
		<tr>
			<td> Alamat : </td>
			<td><textarea rows="10" cols="30" name="alamat" > </textarea> <br></td>
		</tr>
		<tr>
			<td><label for="tinggal">Tinggal di : </label></td>
			<td>
			<select name="tinggal">
				<option value="-pilih-">-pilih-</option>
				<option value="Kos/Kontrakan">Kos/Kontrakan</option>
				<option value="Rumah saudara">Rumah saudara</option>
				<option value="Rumah Orang Tua">Rumah Orang Tua</option>
			</select>
			</td>
		</tr>
		<br>
		 <tr>

			 <td> Pilih Hobi yang disukai : </td>
			<td>	<input type="checkbox" name="hobi[]" value="Science"> Science	<br>
					<input type="checkbox" name="hobi[]" value="Technology"> Technology<br>
					<input type="checkbox" name="hobi[]" value="Art"> Art<br>
					<input type="checkbox" name="hobi[]" value="Sport"> Sport<br>
			</td>
		</tr>
		<br><br><br>
		<tr>
		<td><input type="Submit" value="Lihat Kartu" name="input" />
		<input type="Reset" value="Reset" name="reset" /></td>
		</tr>

		</table>
	</form>
</body>
</html>