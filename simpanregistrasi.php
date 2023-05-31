<?php
include 'koneksiform.php';
// menyimpan data kedalam variabel
$jp         = $_POST['jp'];
$tglMS      = $_POST['tglMS'];
$nis        = $_POST['nis'];
$nomorPU    = $_POST['nomorPU'];
$paud       = $_POST['paud'];
$tk         = $_POST['tk'];
$noskhun    = $_POST['noskhun'];
$noijazah   = $_POST['noijazah'];
$hobi       = $_POST['hobi'];
$cita       = $_POST['cita'];

// query SQL untuk insert data
$query="INSERT INTO registrasi SET jp='$jp',tglMS='$tglMS',nis='$nis',nomorPU='$nomorPU',paud='$paud',tk='$tk',noskhun='$noskhun',noijazah='$noijazah',hobi='$hobi',cita='$cita'";
mysqli_query($koneksiform, $query);
// mengalihkan ke halaman datapribadi.php
header("location:datapribadi.php");
?>