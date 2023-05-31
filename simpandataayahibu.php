<?php
include 'koneksiform.php';
// menyimpan data kedalam variabel
$ayah    = $_POST['ayah'];
$thnlahirayah     = $_POST['thnlahirayah'];
$pendidikanayah   = $_POST['pendidikanayah'];
$pekerjaanayah    = $_POST['pekerjaanayah'];
$hasilayah        = $_POST['hasilayah'];
$khususayah       = $_POST['khususayah'];
$ibu              = $_POST['ibu'];
$thnlahiribu      = $_POST['thnlahiribu'];
$pendidikanibu    = $_POST['pendidikanibu'];
$pekerjaanibu     = $_POST['pekerjaanibu'];
$hasilibu         = $_POST['hasilibu'];
$khususibu        = $_POST['khususibu'];


// query SQL untuk insert data
$query="INSERT INTO dataayahibu SET ayah='$ayah',thnlahirayah='$thnlahirayah',pendidikanayah='$pendidikanayah',pekerjaanayah='$pekerjaanayah',hasilayah='$hasilayah',khususayah='$khususayah',ibu='$ibu',thnlahiribu='$thnlahiribu',pendidikanibu='$pendidikanibu',pekerjaanibu='$pekerjaanibu',hasilibu='$hasilibu',khususibu='$khususibu'";
mysqli_query($koneksiform, $query);
// mengalihkan ke halaman tampilformulir.php
header("location:tampilformulir.php");
?>