<!DOCTYPE HTML>
<html>
<head>
	<title>Formulir Registrasi Peserta Didik</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
.warning {color: #FF0000;}
</style>
</head>
<body>

<?php

$error_ayah = "";
$error_thnlahirayah = "";
$error_pendidikanayah = "";
$error_pekerjaanayah = "";
$error_hasilayah = "";
$error_khususayah = "";
$error_ibu = "";
$error_thnlahiribu = "";
$error_pendidikanibu = "";
$error_pekerjaanibu = "";
$error_hasilibu = "";
$error_khususibu = "";

$ayah = "";
$thnlahirayah = "";
$pendidikanayah = "";
$pekerjaanayah = "";
$hasilayah = "";
$khususayah = "";
$ibu = "";
$thnlahiribu = "";
$pendidikanibu = "";
$pekerjaanibu = "";
$hasilibu = "";
$khususibu = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ayah"])) {
		$error_ayah = "Nama Ayah Kandung tidak boleh kosong";
	}
	else {
		$ayah = cek_input($_POST["ayah"]);
        if (!preg_match("/^[a-zA-Z]*$/",$ayah)) {
            $error_ayah = "Inputan hanya boleh huruf dan spasi";
        }
	}

    if (empty($_POST["thnlahirayah"])) {
		$error_thnlahirayah = "Tahun Lahir tidak boleh kosong";
	}
	else {
		$thnlahirayah = cek_input($_POST["thnlahirayah"]);
		if (!is_numeric($thnlahirayah)) {
			$error_thnlahirayah = 'Tahun Lahir hanya boleh angka';
		}
	}

	if (empty($_POST["pendidikanayah"])) {
		$error_pendidikanayah = "Pilih Salah Satu";
	}
	else {
		$pendidikanayah = cek_input($_POST["pendidikanayah"]);
	}

	if (empty($_POST["pekerjaanayah"])) {
		$error_pekerjaanayah = "Pilih Salah Satu";
	}
	else {
		$pekerjaanayah = cek_input($_POST["pekerjaanayah"]);
	}

	if (empty($_POST["hasilayah"])) {
		$error_hasilayah = "Pilih Salah Satu";
	}
	else {
		$hasilayah = cek_input($_POST["hasilayah"]);
	}

	if (empty($_POST["khususayah"])) {
		$error_khususayah = "Pilih Salah Satu";
	}
	else {
		$khususayah = cek_input($_POST["khususayah"]);
	}

    if (empty($_POST["ibu"])) {
		$error_ibu = "Nama Ibu Kandung tidak boleh kosong";
	}
	else {
		$ibu = cek_input($_POST["ibu"]);
        if (!preg_match("/^[a-zA-Z]*$/",$ibu)) {
            $error_ibu = "Inputan hanya boleh huruf dan spasi";
        }
	}

    if (empty($_POST["thnlahiribu"])) {
		$error_thnlahiribu = "Tahun Lahir tidak boleh kosong";
	}
	else {
		$thnlahiribu = cek_input($_POST["thnlahiribu"]);
		if (!is_numeric($thnlahiribu)) {
			$error_thnlahiribu = 'Tahun Lahir hanya boleh angka';
		}
	}

	if (empty($_POST["pendidikanibu"])) {
		$error_pendidikanibu = "Pilih Salah Satu";
	}
	else {
		$pendidikanibu = cek_input($_POST["pendidikanibu"]);
	}

	if (empty($_POST["pekerjaanibu"])) {
		$error_pekerjaanibu = "Pilih Salah Satu";
	}
	else {
		$pekerjaanibu = cek_input($_POST["pekerjaanibu"]);
	}

	if (empty($_POST["hasilibu"])) {
		$error_hasilibu = "Pilih Salah Satu";
	}
	else {
		$hasilibu = cek_input($_POST["hasilibu"]);
	}

	if (empty($_POST["khususibu"])) {
		$error_khususibu = "Pilih Salah Satu";
	}
	else {
		$khususibu = cek_input($_POST["khususibu"]);
	}
	
}

function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
<div class="col-md-12">
<div class="card">
	<div class="card-header">
		<center> <h1>FORMULIR PESERTA DIDIK</h1> </center>
	</div>
	<div class="card-body">
		<h5>DATA AYAH KANDUNG</h5>
		<form method="POST" action="simpandataayahibu.php">
		<div class="form-group row">
			<label for="ayah" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
			<div class="col-sm-10">
				<input type="text" name="ayah" class="form-control <?php echo ($error_ayah !="" ?
                "is-invalid" : ""); ?>" id="ayah" placeholder="Nama Ayah Kandung" value="<?php echo
                $ayah; ?>"><span class="warning"><?php echo $error_ayah; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="thnlahirayah" class="col-sm-2 col-form-label">Tahun Lahir</label>
			<div class="col-sm-10">
				<input type="text" name="thnlahirayah" class="form-control <?php echo ($error_thnlahirayah !="" ? 
                "is-invalid" : ""); ?>" id="thnlahirayah" placeholder="1965" value="<?php echo
                $thnlahirayah; ?>"><span class="warning"><?php echo $error_thnlahirayah; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="pendidikanayah" class="col-sm-2 col-form-label">Pendidikan</label>
			<div class="col-sm-10">
				<select name="pendidikanayah" class="form-control <?php echo ($error_pendidikanayah !="" ?
                 "is-invalid" : ""); ?>" id="pendidikanayah" value="<?php echo $pendidikanayah; ?>">
                 <span class="warning"><?php echo $error_pendidikanayah; ?></span>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
						<option value="D3">D3</option>
                        <option value="D4">D4</option>
						<option value="S1">S1</option>
                        <option value="S2">S2</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="pekerjaanayah" class="col-sm-2 col-form-label">Pekerjaan</label>
			<div class="col-sm-10">
				<select name="pekerjaanayah" class="form-control <?php echo ($error_pekerjaanayah !="" ?
                 "is-invalid" : ""); ?>" id="pekerjaanayah" value="<?php echo $pekerjaanayah; ?>">
                 <span class="warning"><?php echo $error_pekerjaanayah; ?></span>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
						<option value="Petani">Petani</option>
                        <option value="Buruh">Buruh</option>
						<option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="hasilayah" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
			<div class="col-sm-10">
				<select name="hasilayah" class="form-control <?php echo ($error_hasilayah !="" ?
                 "is-invalid" : ""); ?>" id="hasilayah" value="<?php echo $hasilayah; ?>">
                 <span class="warning"><?php echo $error_hasilayah; ?></span>
                        <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                        <option value="500.000 - 999.999">500.000 - 999.999</option>
						<option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
                        <option value="2 Juta - 4.999.999">2 Juta - 4.999.999</option>
						<option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                        <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="khususayah" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			<div class="col-sm-10">
				<select name="khususayah" class="form-control <?php echo ($error_khususayah !="" ?
                 "is-invalid" : ""); ?>" id="khususayah" value="<?php echo $khususayah; ?>">
                 <span class="warning"><?php echo $error_khususayah; ?></span>
                        <option value="Tidak">Tidak</option>
                        <option value="Netra">Netra</option>
						<option value="Rungu">Rungu</option>
                        <option value="Wicara">Wicara</option>
						<option value="Autis">Autis</option>
                        <option value="Indigo">Indigo</option>
                </select>
			</div>
		</div>

        <br>
        <h5>DATA IBU KANDUNG</h5>
        <div class="form-group row">
			<label for="ibu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
			<div class="col-sm-10">
				<input type="text" name="ibu" class="form-control <?php echo ($error_ibu !="" ?
                "is-invalid" : ""); ?>" id="ibu" placeholder="Nama Ibu Kandung" value="<?php echo
                $ibu; ?>"><span class="warning"><?php echo $error_ibu; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="thnlahiribu" class="col-sm-2 col-form-label">Tahun Lahir</label>
			<div class="col-sm-10">
				<input type="text" name="thnlahiribu" class="form-control <?php echo ($error_thnlahiribu !="" ? 
                "is-invalid" : ""); ?>" id="thnlahiribu" placeholder="1964" value="<?php echo
                $thnlahiribu; ?>"><span class="warning"><?php echo $error_thnlahiribu; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="pendidikanibu" class="col-sm-2 col-form-label">Pendidikan</label>
			<div class="col-sm-10">
				<select name="pendidikanibu" class="form-control <?php echo ($error_pendidikanibu !="" ?
                 "is-invalid" : ""); ?>" id="pendidikanibu" value="<?php echo $pendidikanibu; ?>">
                 <span class="warning"><?php echo $error_pendidikanibu; ?></span>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
						<option value="D3">D3</option>
                        <option value="D4">D4</option>
						<option value="S1">S1</option>
                        <option value="S2">S2</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="pekerjaanibu" class="col-sm-2 col-form-label">Pekerjaan</label>
			<div class="col-sm-10">
				<select name="pekerjaanibu" class="form-control <?php echo ($error_pekerjaanibu !="" ?
                 "is-invalid" : ""); ?>" id="pekerjaanibu" value="<?php echo $pekerjaanibu; ?>">
                 <span class="warning"><?php echo $error_pekerjaanibu; ?></span>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
						<option value="Petani">Petani</option>
                        <option value="Buruh">Buruh</option>
						<option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="hasilibu" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
			<div class="col-sm-10">
				<select name="hasilibu" class="form-control <?php echo ($error_hasilibu !="" ?
                 "is-invalid" : ""); ?>" id="hasilibu" value="<?php echo $hasilibu; ?>">
                 <span class="warning"><?php echo $error_hasilibu; ?></span>
                        <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                        <option value="500.000 - 999.999">500.000 - 999.999</option>
						<option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
                        <option value="2 Juta - 4.999.999">2 Juta - 4.999.999</option>
						<option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                        <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="khususibu" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			<div class="col-sm-10">
				<select name="khususibu" class="form-control <?php echo ($error_khususibu !="" ?
                 "is-invalid" : ""); ?>" id="khususibu" value="<?php echo $khususibu; ?>">
                 <span class="warning"><?php echo $error_khususibu; ?></span>
                        <option value="Tidak">Tidak</option>
                        <option value="Netra">Netra</option>
						<option value="Rungu">Rungu</option>
                        <option value="Wicara">Wicara</option>
						<option value="Autis">Autis</option>
                        <option value="Indigo">Indigo</option>
                </select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-10">
			<button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>