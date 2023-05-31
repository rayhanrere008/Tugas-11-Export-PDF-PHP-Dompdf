<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
	<h1>Data Pendaftaran Peserta Didik</h1>
	<h4>Data Registrasi</h4>

	<?php
		include 'koneksiform.php';
		$registrasi = mysqli_query($koneksiform, "SELECT * from registrasi");
	?>

	<?php foreach ($registrasi as $item): ?>
		<ul>
			<li>Jenis Pendaftaran : <?= $item['jp'] ?></li>
			<li>Tanggal Masuk Sekolah : <?= $item['tglMS'] ?></li>
			<li>NIS : <?= $item['nis'] ?></li>
			<li>Nomor Peserta Ujian : <?= $item['nomorPU'] ?></li>
			<li>Apakah Pernah PAUD? : <?= $item['paud'] ?></li>
			<li>Apakah Pernah TK? : <?= $item['tk'] ?></li>
			<li>No. Seri SKHUN Sebelumnya : <?= $item['noskhun'] ?></li>
			<li>No. Seri Ijazah Sebelumnya : <?= $item['noijazah'] ?></li>
			<li>Hobi : <?= $item['hobi'] ?></li>
			<li>Cita-cita : <?= $item['cita'] ?></li>
		</ul>
	<?php endforeach; ?>

    <h4>Data Pribadi</h4>

    <?php
    include 'koneksiform.php';
    $datapribadi = mysqli_query($koneksiform, "SELECT * from datapribadi");
    ?>

    <?php foreach ($datapribadi as $item): ?>
    <ul>
        <li>Nama Lengkap : <?= $item['namalengkap'] ?></li>
        <li>Jenis Kelamin : <?= $item['jk'] ?></li>
        <li>NISN : <?= $item['nisn'] ?></li>
        <li>NIK : <?= $item['nik'] ?></li>
        <li>Tempat Lahir : <?= $item['tmptlahir'] ?></li>
        <li>Tanggal Lahir : <?= $item['tgllahir'] ?></li>
        <li>Agama : <?= $item['agama'] ?></li>
        <li>Berkebutuhan Khusus : <?= $item['khusus'] ?></li>
        <li>Alamat Jalan : <?= $item['alamat'] ?></li>
        <li>RT : <?= $item['rt'] ?></li>
        <li>RW : <?= $item['rw'] ?></li>
        <li>Nama Dusun : <?= $item['namadusun'] ?></li>
        <li>Nama Kelurahan/Desa : <?= $item['namalurah'] ?></li>
        <li>Kecamatan : <?= $item['kec'] ?></li>
        <li>Kode Pos : <?= $item['kodepos'] ?></li>
        <li>Tempat Tinggal : <?= $item['ttinggal'] ?></li>
        <li>Moda Transportasi : <?= $item['transport'] ?></li>
        <li>Nomor HP : <?= $item['hp'] ?></li>
        <li>Nomor Telepon : <?= $item['telp'] ?></li>
        <li>Email Pribadi : <?= $item['email'] ?></li>
        <li>Penerima KPS/PKH/KIP : <?= $item['kip'] ?></li>
        <li>No. KPS/KKS/PKH/KIP : <?= $item['nokip'] ?></li>
        <li>Kewarganegaraan : <?= $item['warga'] ?></li>
        <li>Nama Negara : <?= $item['negara'] ?></li>

    </ul>
    <?php endforeach; ?>

    <h4>Data Ayah Kandung</h4>

    <?php
    include 'koneksiform.php';
    $dataayahibu = mysqli_query($koneksiform, "SELECT * from dataayahibu");
    ?>

    <?php foreach ($dataayahibu as $item): ?>
    <ul>
        <li>Nama Ayah Kandung : <?= $item['ayah'] ?></li>
        <li>Tahun Lahir : <?= $item['thnlahirayah'] ?></li>
        <li>Pendidikan : <?= $item['pendidikanayah'] ?></li>
        <li>Pekerjaan : <?= $item['pekerjaanayah'] ?></li>
        <li>Penghasilan Bulanan : <?= $item['hasilayah'] ?></li>
        <li>Berkebutuhan Khusus : <?= $item['khususayah'] ?></li>
        
    </ul>
    <?php endforeach; ?>

    <h4>Data Ibu Kandung</h4>

    <?php
    include 'koneksiform.php';
    $dataayahibu = mysqli_query($koneksiform, "SELECT * from dataayahibu");
    ?>

    <?php foreach ($dataayahibu as $item): ?>
    <ul>
        <li>Nama Ibu Kandung : <?= $item['ibu'] ?></li>
        <li>Tahun Lahir : <?= $item['thnlahiribu'] ?></li>
        <li>Pendidikan : <?= $item['pendidikanibu'] ?></li>
        <li>Pekerjaan : <?= $item['pekerjaanibu'] ?></li>
        <li>Penghasilan Bulanan : <?= $item['hasilibu'] ?></li>
        <li>Berkebutuhan Khusus : <?= $item['khususibu'] ?></li>
    
    </ul>
    <?php endforeach; ?>

    <form method="POST" action="reportdataregistrasi.php">
    <div class="form-group row">
			<div class="col-sm-10">
			<button type="submit" name="submit" value="export" class="btn btn-primary">Export to Excel</button>
			</div>
		</div>
		</form>

    <form method="POST" action="pdfdataregistrasi.php">
    <div class="form-group row">
    <div class="col-sm-10">
			<button type="submit" name="submit" value="export" class="btn btn-primary">Export Registrasi to PDF</button>
			</div>
		</div>
		</form>
    
    <form method="POST" action="pdfdatapribadi.php">
    <div class="form-group row">
    <div class="col-sm-10">
			<button type="submit" name="submit" value="export" class="btn btn-primary">Export Data Pribadi to PDF</button>
			</div>
		</div>
		</form>

    <form method="POST" action="pdfdataayahibu.php">
    <div class="form-group row">
    <div class="col-sm-10">
			<button type="submit" name="submit" value="export" class="btn btn-primary">Export Data Ayah Ibu to PDF</button>
			</div>
		</div>
		</form>
</body>
</html>