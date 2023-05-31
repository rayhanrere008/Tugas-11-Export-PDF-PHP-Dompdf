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

$error_namalengkap = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_tmptlahir = "";
$error_tgllahir = "";
$error_agama = "";
$error_khusus = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_namadusun = "";
$error_namalurah = "";
$error_kec = "";
$error_kodepos = "";
$error_ttinggal = "";
$error_transport = "";
$error_hp = "";
$error_telp = "";
$error_email = "";
$error_kip = "";
$error_nokip = "";
$error_warga = "";
$error_negara = "";

$namalengkap = "";
$jk = "";
$nisn = "";
$nik = "";
$tmptlahir = "";
$tgllahir = "";
$agama = "";
$khusus = "";
$alamat = "";
$rt = "";
$rw = "";
$namadusun = "";
$namalurah = "";
$kec = "";
$kodepos = "";
$ttinggal = "";
$transport = "";
$hp = "";
$telp = "";
$email = "";
$kip = "";
$nokip = "";
$warga = "";
$negara = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["namalengkap"])) {
		$error_namalengkap = "Nama Lengkap tidak boleh kosong";
	}
	else {
		$namalengkap = cek_input($_POST["namalengkap"]);
        if (!preg_match("/^[a-zA-Z]*$/",$namalengkap)) {
            $error_namalengkap = "Inputan hanya boleh huruf dan spasi";
        }
	}

	if (empty($_POST["jk"])) {
		$error_jk = "Pilih salah satu";
	}
	else {
		$jk = cek_input($_POST["jk"]);
	}

	if (empty($_POST["nisn"])) {
		$error_nisn = "NISN tidak boleh kosong";
	}
	else {
		$nisn = cek_input($_POST["nisn"]);
		if (!is_numeric($nisn)) {
			$error_nisn = 'Nomor NISN hanya boleh angka';
		}
	}

    if (empty($_POST["nik"])) {
		$error_nik = "NIK tidak boleh kosong";
	}
	else {
		$nik = cek_input($_POST["nik"]);
		if (!is_numeric($nik)) {
			$error_nik = 'Nomor NIK hanya boleh angka';
		}
	}

    if (empty($_POST["tmptlahir"])) {
		$error_tmptlahir = "Tempat Lahir tidak boleh kosong";
	}
	else {
		$tmptlahir = cek_input($_POST["tmptlahir"]);
	}

    if (empty($_POST["tgllahir"])) {
		$error_tgllahir = "Tanggal Lahir tidak boleh kosong";
	}
	else {
		$tgllahir = cek_input($_POST["tgllahir"]);
	}

    if (empty($_POST["agama"])) {
		$error_agama = "Agama tidak boleh kosong";
	}
	else {
		$agama = cek_input($_POST["agama"]);
	}

    if (empty($_POST["khusus"])) {
		$error_khusus = "Berkebutuhan Khusus tidak boleh kosong";
	}
	else {
		$khusus = cek_input($_POST["khusus"]);
	}

    if (empty($_POST["alamat"])) {
		$error_alamat = "Alamat tidak boleh kosong";
	}
	else {
		$alamat = cek_input($_POST["alamat"]);
        if (!preg_match("/^[a-zA-Z0-9\s,'-]*$/",$alamat)) {
            $error_alamat = "Hanya huruf, angka, spasi, koma, petik tunggal, tanda hubung dan garis miring yang diperbolehkan";
        }
	}

    
    if (empty($_POST["rt"])) {
		$error_rt = "Nomor RT tidak boleh kosong";
	}
	else {
		$rt = cek_input($_POST["rt"]);
        if(strlen($_POST['rt']) != 3){
            $error_rt = 'Nomor RT harus terdiri dari 3 karakter';
         }
	}

    if (empty($_POST["rw"])) {
		$error_rw = "Nomor RW tidak boleh kosong";
	}
	else {
		$rw = cek_input($_POST["rw"]);
        if(strlen($_POST['rw']) != 3){
            $error_rw = 'Nomor RW harus terdiri dari 3 karakter';
         }
	}

    if (empty($_POST["namadusun"])) {
		$error_namadusun = "Nama Dusun tidak boleh kosong";
	}
	else {
		$namadusun = cek_input($_POST["namadusun"]);
        if (!preg_match("/^[a-zA-Z]*$/",$namadusun)) {
            $error_namadusun = "Inputan hanya boleh huruf dan spasi";
        }
	}

    if (empty($_POST["namalurah"])) {
		$error_namalurah = "Nama Kelurahan/Desa tidak boleh kosong";
	}
	else {
		$namalurah = cek_input($_POST["namalurah"]);
        if (!preg_match("/^[a-zA-Z]*$/",$namalurah)) {
            $error_namalurah = "Inputan hanya boleh huruf dan spasi";
        }
	}

    if (empty($_POST["kec"])) {
		$error_kec = "Kecamatan tidak boleh kosong";
	}
	else {
		$kec = cek_input($_POST["kec"]);
        if (!preg_match("/^[a-zA-Z]*$/",$kec)) {
            $error_kec = "Inputan hanya boleh huruf dan spasi";
        }
	}

    if (empty($_POST["kodepos"])) {
		$error_kodepos = "Kode POS tidak boleh kosong";
	}
	else {
		$kodepos = cek_input($_POST["kodepos"]);
		if (!is_numeric($kodepos)) {
			$error_kodepos = 'Nomor Kode POS hanya boleh angka';
		}
	}

	if (empty($_POST["ttinggal"])) {
		$error_ttinggal = "Pilih salah satu";
	}
	else {
		$ttinggal = cek_input($_POST["ttinggal"]);
	}

	if (empty($_POST["transport"])) {
		$error_transport = "Pilih salah satu";
	}
	else {
		$transport = cek_input($_POST["transport"]);
	}

    if (empty($_POST["hp"])) {
		$error_hp = "Nomor HP tidak boleh kosong";
	}
	else {
		$hp = cek_input($_POST["hp"]);
		if (!is_numeric($hp)) {
			$error_hp = 'Nomor HP hanya boleh angka';
		}
	}

    if (empty($_POST["telp"])) {
		$error_telp = "Nomor Telepon tidak boleh kosong";
	}
	else {
		$telp = cek_input($_POST["telp"]);
		if (!is_numeric($telp)) {
			$error_telp = 'Nomor Telepon hanya boleh angka';
		}
	}

    if (empty($_POST["email"])) {
		$error_email = "Email Pribadi tidak boleh kosong";
	}
	else {
		$email = cek_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error_email = 'Format email Invalid';
		}
	}

    if (empty($_POST["kip"])) {
		$error_kip = "Pilih salah satu";
	}
	else {
		$kip = cek_input($_POST["kip"]);
	}

    if (empty($_POST["nokip"])) {
		$error_nokip = "No. KPS/KKS/PKH/KIP tidak boleh kosong";
	}
	else {
		$nokip = cek_input($_POST["nokip"]);
		if (!is_numeric($nokip)) {
			$error_nokip = 'No. KPS/KKS/PKH/KIP hanya boleh angka';
		}
	}

    if (empty($_POST["warga"])) {
		$error_warga = "Pilih salah satu";
	}
	else {
		$warga = cek_input($_POST["warga"]);
	}

    if (empty($_POST["negara"])) {
		$error_negara = "Nama Negara tidak boleh kosong";
	}
	else {
		$negara = cek_input($_POST["negara"]);
        if (!preg_match("/^[a-zA-Z]*$/",$negara)) {
            $error_negara = "Inputan hanya boleh huruf dan spasi";
        }
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
		<h5>DATA PRIBADI</h5>
		<form method="POST" action="simpandatapribadi.php">
        <div class="form-group row">
			<label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-sm-10">
				<input type="text" name="namalengkap" class="form-control <?php echo ($error_namalengkap !="" ? "is-invalid" : ""); ?>" id="namalengkap" placeholder="Nama Lengkap" value="<?php echo $namalengkap; ?>"><span class="warning"><?php echo $error_namalengkap; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-10" <?php echo ($error_jk !="" ? "is-invalid" : ""); ?> id="jk" value="<?php echo $jk; ?>"><span class="warning"><?php echo $error_jk; ?></span>
				<input type="radio" name="jk" value="Laki-laki"> Laki-laki
				<input type="radio" name="jk" value="Perempuan"> Perempuan
			</div>
		</div>

        <div class="form-group row">
			<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
			<div class="col-sm-10">
				<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="nik" class="col-sm-2 col-form-label">NIK</label>
			<div class="col-sm-10">
				<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="tmptlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
			<div class="col-sm-10">
				<input type="text" name="tmptlahir" class="form-control <?php echo ($error_tmptlahir !="" ? "is-invalid" : ""); ?>" id="tmptlahir" placeholder="Tempat Lahir" value="<?php echo $tmptlahir; ?>"><span class="warning"><?php echo $error_tmptlahir; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-10">
				<input type="date" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" value="<?php echo $tgllahir; ?>"><span class="warning"><?php echo $error_tgllahir; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="agama" class="col-sm-2 col-form-label">Agama</label>
			<div class="col-sm-10">
				<select name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
                        <option value="Islam">Islam</option>
                        <option value="Kristen/Protestan">Kristen/Protestan</option>
						<option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
                        <option value="Khong Hu Chu">Khong Hu Chu</option>
                        <option value="Lainnya">Lainnya</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="khusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			<div class="col-sm-10">
				<select name="khusus" class="form-control <?php echo ($error_khusus !="" ? "is-invalid" : ""); ?>" id="khusus" value="<?php echo $khusus; ?>"><span class="warning"><?php echo $error_khusus; ?></span>
                        <option value="Tidak">Tidak</option>
                        <option value="Netra">Netra</option>
						<option value="Rungu">Rungu</option>
                        <option value="Wicara">Wicara</option>
						<option value="Laras">Laras</option>
                        <option value="Autis">Autis</option>
                        <option value="Indigo">Indigo</option>
                </select>
			</div>
		</div>

		<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="rt" class="col-sm-2 col-form-label">RT</label>
			<div class="col-sm-10">
				<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="007" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="rw" class="col-sm-2 col-form-label">RW</label>
			<div class="col-sm-10">
				<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="005" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="namadusun" class="col-sm-2 col-form-label">Nama Dusun</label>
			<div class="col-sm-10">
				<input type="text" name="namadusun" class="form-control <?php echo ($error_namadusun !="" ? "is-invalid" : ""); ?>" id="namadusun" placeholder="Nama Dusun" value="<?php echo $namadusun; ?>"><span class="warning"><?php echo $error_namadusun; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="namalurah" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
			<div class="col-sm-10">
				<input type="text" name="namalurah" class="form-control <?php echo ($error_namalurah !="" ? "is-invalid" : ""); ?>" id="namalurah" placeholder="Nama Kelurahan/Desa" value="<?php echo $namalurah; ?>"><span class="warning"><?php echo $error_namalurah; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="kec" class="col-sm-2 col-form-label">Kecamatan</label>
			<div class="col-sm-10">
				<input type="text" name="kec" class="form-control <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" id="kec" placeholder="Kecamatan" value="<?php echo $kec; ?>"><span class="warning"><?php echo $error_kec; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
			<div class="col-sm-10">
				<input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="60124" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="ttinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
			<div class="col-sm-10">
				<select name="ttinggal" class="form-control <?php echo ($error_ttinggal !="" ? "is-invalid" : ""); ?>" id="ttinggal" value="<?php echo $ttinggal; ?>"><span class="warning"><?php echo $error_ttinggal; ?></span>
                        <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                        <option value="Wali">Wali</option>
						<option value="Kos">Kos</option>
                        <option value="Asrama">Asrama</option>
						<option value="Panti Asuhan">Panti Asuhan</option>
                        <option value="Lainnya">Lainnya</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="transport" class="col-sm-2 col-form-label">Moda Transportasi</label>
			<div class="col-sm-10">
				<select name="transport" class="form-control <?php echo ($error_transport !="" ? "is-invalid" : ""); ?>" id="transport" value="<?php echo $transport; ?>"><span class="warning"><?php echo $error_transport; ?></span>
                        <option value="Jalan Kaki">Jalan Kaki</option>
                        <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
						<option value="Kendaraan Umum">Kendaraan Umum</option>
                        <option value="Kereta Umum">Kereta Umum</option>
						<option value="Ojek">Ojek</option>
                        <option value="Lainnya">Lainnya</option>
                </select>
			</div>
		</div>
        
        <div class="form-group row">
			<label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
			<div class="col-sm-10">
				<input type="text" name="hp" class="form-control <?php echo ($error_hp !="" ? "is-invalid" : ""); ?>" id="hp" placeholder="08********" value="<?php echo $hp; ?>"><span class="warning"><?php echo $error_hp; ?></span>
			</div>
		</div>

        
        <div class="form-group row">
			<label for="telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
			<div class="col-sm-10">
				<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="03********" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
			</div>
		</div>

        <div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="you@gmail" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="kip" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
			<div class="col-sm-10" <?php echo ($error_kip !="" ? "is-invalid" : ""); ?> id="kip" value="<?php echo $kip; ?>"><span class="warning"><?php echo $error_kip; ?></span>
				<input type="radio" name="kip" value="Ya"> Ya
				<input type="radio" name="kip" value="Tidak"> Tidak
			</div>
		</div>

        <div class="form-group row">
			<label for="nokip" class="col-sm-2 col-form-label">No. KPS/KKS/PKH/KIP</label>
			<div class="col-sm-10">
				<input type="text" name="nokip" class="form-control <?php echo ($error_nokip !="" ? "is-invalid" : ""); ?>" id="nokip" value="<?php echo $nokip; ?>"><span class="warning"><?php echo $error_nokip; ?></span>
			</div>
		</div>

		<div class="form-group row">
			<label for="warga" class="col-sm-2 col-form-label">Kewarganegaraan</label>
			<div class="col-sm-10" <?php echo ($error_warga !="" ? "is-invalid" : ""); ?> id="warga" value="<?php echo $warga; ?>"><span class="warning"><?php echo $error_warga; ?></span>
				<input type="radio" name="warga" value="Indonesia(WNI)"> Indonesia(WNI) 
				<input type="radio" name="warga" value="Asing(WNA)"> Asing(WNA)
			</div>
		</div>

        <div class="form-group row">
			<label for="negara" class="col-sm-2 col-form-label">Nama Negara</label>
			<div class="col-sm-10">
				<input type="text" name="negara" class="form-control <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="negara" value="<?php echo $negara; ?>"><span class="warning"><?php echo $error_negara; ?></span>
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