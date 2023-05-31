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

$error_jp = "";
$error_tglMS = "";
$error_nis = "";
$error_nomorPU = "";
$error_paud = "";
$error_tk = "";
$error_noskhun = "";
$error_noijazah = "";
$error_hobi = "";
$error_cita = "";

$jp = "";
$tglMS = "";
$nis = "";
$nomorPU = "";
$paud = "";
$tk = "";
$noskhun = "";
$noijazah = "";
$hobi = "";
$cita = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["jp"])) {
		$error_jp = "Jenis Pendaftaran tidak boleh kosong";
	}
	else {
		$jp = cek_input($_POST["jp"]);
	}

	if (empty($_POST["tglMS"])) {
		$error_tglMS = "Tanggal Masuk Sekolah tidak boleh kosong";
	}
	else {
		$tglMS = cek_input($_POST["tglMS"]);
	}

	if (empty($_POST["nis"])) {
		$error_nis = "NIS tidak boleh kosong";
	}
	else {
		$nis = cek_input($_POST["nis"]);
		if (!is_numeric($nis)) {
			$error_nis = 'Nomor NIS hanya boleh angka';
		}
	}

	if (empty($_POST["nomorPU"])) {
		$error_nomorPU = "Nomor Peserta Ujian tidak boleh kosong";
	}
	else {
		$nomorPU = cek_input($_POST["nomorPU"]);
		if (!preg_match('/^[0-9]{20}$/', $nomorPU)) {
			$error_nomorPU = 'Nomor Peserta Ujian adalah 20 digit yang tertera di SKHUN SD';
		}
	}

	if (empty($_POST["paud"])) {
		$error_paud = "Pilih salah satu";
	}
	else {
		$paud = cek_input($_POST["paud"]);
	}

	if (empty($_POST["tk"])) {
		$error_tk = "Pilih salah satu";
	}
	else {
		$tk = cek_input($_POST["tk"]);
	}

	if (empty($_POST["noskhun"])) {
		$error_noskhun = "No. Seri SKHUN Sebelumnya tidak boleh kosong";
	}
	else {
		$noskhun = cek_input($_POST["noskhun"]);
		if (!preg_match('/^[0-9]{16}$/', $noskhun)) {
			$error_noskhun = 'Diisi 16 digit yang tertera di SKHUN SD';
		}
	}

	if (empty($_POST["noijazah"])) {
		$error_noijazah = "No. Seri Ijazah Sebelumnya tidak boleh kosong";
	}
	else {
		$noijazah = cek_input($_POST["noijazah"]);
		if (!preg_match('/^[0-9]{16}$/', $noijazah)) {
			$error_noijazah = 'Diisi 16 digit yang tertera di Ijazah SD';
		}
	}

	if (empty($_POST["hobi"])) {
		$error_hobi = "Pilihan Hobi tidak boleh kosong";
	}
	else {
		$hobi = cek_input($_POST["hobi"]);
	}

	if (empty($_POST["cita"])) {
		$error_cita = "Pilihan Cita-cita tidak boleh kosong";
	}
	else {
		$cita = cek_input($_POST["cita"]);
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
		Tanggal: <?php echo date('l, d-m-Y'); ?>
	</div>
	<div class="card-body">
		<h5>REGISTRASI PESERTA DIDIK</h5>
		<form method="POST" action="simpanregistrasi.php">
		<div class="form-group row">
			<label for="jp" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
			<div class="col-sm-10">
				<select name="jp" class="form-control <?php echo ($error_jp !="" ? "is-invalid" : ""); ?>" id="jp" value="<?php echo $jp; ?>"><span class="warning"><?php echo $error_jp; ?></span>
					<option value="">-- Pilih Jenis Pendaftaran --</option>
    				<option value="Siswa Baru" <?php if($jp == "Siswa Baru") echo "selected"; ?>>Siswa Baru</option>
    				<option value="Pindahan" <?php if($jp == "Pindahan") echo "selected"; ?>>Pindahan</option>

                </select>
			</div>
		</div>

		<div class="form-group row">
			<label for="tglMS" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
			<div class="col-sm-10">
				<input type="date" name="tglMS" class="form-control <?php echo ($error_tglMS !="" ? "is-invalid" : ""); ?>" id="tglMS" value="<?php echo $tglMS; ?>"><span class="warning"><?php echo $error_tglMS; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="nis" class="col-sm-2 col-form-label">NIS</label>
			<div class="col-sm-10">
				<input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" id="nis" placeholder="NIS" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="nomorPU" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
			<div class="col-sm-10">
				<input type="text" name="nomorPU" class="form-control <?php echo ($error_nomorPU !="" ? "is-invalid" : ""); ?>" id="nomorPU" placeholder="Nomor Peserta Ujian" value="<?php echo $nomorPU; ?>"><span class="warning"><?php echo $error_nomorPU; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="paud" class="col-sm-2 col-form-label">Apakah pernah PAUD?</label>
			<div class="col-sm-10" <?php echo ($error_paud !="" ? "is-invalid" : ""); ?> id="paud" value="<?php echo $paud; ?>"><span class="warning"><?php echo $error_paud; ?></span>
				<input type="radio" name="paud" value="Ya"> Ya
				<input type="radio" name="paud" value="Tidak"> Tidak
			</div>
		</div>

		<div class="form-group row">
			<label for="tk" class="col-sm-2 col-form-label">Apakah pernah TK?</label>
			<div class="col-sm-10" <?php echo ($error_tk !="" ? "is-invalid" : ""); ?> id="tk" value="<?php echo $tk; ?>"><span class="warning"><?php echo $error_tk; ?></span>
				<input type="radio" name="tk" value="Ya"> Ya
				<input type="radio" name="tk" value="Tidak"> Tidak
			</div>
		</div>

		<div class="form-group row">
			<label for="noskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
			<div class="col-sm-10">
				<input type="text" name="noskhun" class="form-control <?php echo ($error_noskhun !="" ? "is-invalid" : ""); ?>" id="noskhun" placeholder="Nomor SKHUN SD" value="<?php echo $noskhun; ?>"><span class="warning"><?php echo $error_noskhun; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="noijazah" class="col-sm-2 col-form-label">No. Ijazah SKHUN Sebelumnya</label>
			<div class="col-sm-10">
				<input type="text" name="noijazah" class="form-control <?php echo ($error_noijazah !="" ? "is-invalid" : ""); ?>" id="noijazah" placeholder="Nomor Ijazah SD" value="<?php echo $noijazah; ?>"><span class="warning"><?php echo $error_noijazah; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
			<div class="col-sm-10">
				<select name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is-invalid" : ""); ?>" id="hobi" value="<?php echo $hobi; ?>"><span class="warning"><?php echo $error_hobi; ?></span>
						<option value="">-- Pilih Jenis Hobi --</option>
						<option value="Olah Raga" <?php if($hobi == "Olah Raga") echo "selected"; ?>>Olah Raga</option>
						<option value="Kesenian" <?php if($hobi == "Kesenian") echo "selected"; ?>>Kesenian</option>
						<option value="Membaca" <?php if($hobi == "Membaca") echo "selected"; ?>>Membaca</option>
						<option value="Menulis" <?php if($hobi == "Menulis") echo "selected"; ?>>Menulis</option>
						<option value="Traveling" <?php if($hobi == "Traveling") echo "selected"; ?>>Traveling</option>
						<option value="Lainnya" <?php if($hobi == "Lainnya") echo "selected"; ?>>Lainnya</option>
                </select>
			</div>
		</div>

		<div class="form-group row">
			<label for="cita" class="col-sm-2 col-form-label">Cita-cita</label>
			<div class="col-sm-10">
				<select name="cita" class="form-control <?php echo ($error_cita !="" ? "is-invalid" : ""); ?>" id="cita" value="<?php echo $cita; ?>"><span class="warning"><?php echo $error_cita; ?></span>
						<option value="">-- Pilih Jenis Cita-cita --</option>
						<option value="PNS" <?php if($cita == "PNS") echo "selected"; ?>>PNS</option>
						<option value="TNI/POLRI" <?php if($cita == "TNI/POLRI") echo "selected"; ?>>TNI/POLRI</option>
						<option value="Guru/Dosen" <?php if($cita == "Guru/Dosen") echo "selected"; ?>>Guru/Dosen</option>
						<option value="Politikus" <?php if($cita == "Politikus") echo "selected"; ?>>Politikus</option>
						<option value="Wiraswasta" <?php if($cita == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
						<option value="Seni/Lukis/Artis/Sejenis" <?php if($cita == "Seni/Lukis/Artis/Sejenis") echo "selected"; ?>>Seni/Lukis/Artis/Sejenis</option>
						<option value="Lainnya" <?php if($cita == "Lainnya") echo "selected"; ?>>Lainnya</option>
                </select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-10">
			<button type="submit" name="submit" value="next" class="btn btn-primary">Next</button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>