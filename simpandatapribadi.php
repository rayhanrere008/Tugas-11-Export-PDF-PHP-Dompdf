<?php
include 'koneksiform.php';
// menyimpan data kedalam variabel
$namalengkap    = $_POST['namalengkap'];
$jk             = $_POST['jk'];
$nisn           = $_POST['nisn'];
$nik            = $_POST['nik'];
$tmptlahir      = $_POST['tmptlahir'];
$tgllahir       = $_POST['tgllahir'];
$agama          = $_POST['agama'];
$khusus         = $_POST['khusus'];
$alamat         = $_POST['alamat'];
$rt             = $_POST['rt'];
$rw             = $_POST['rw'];
$namadusun      = $_POST['namadusun'];
$namalurah      = $_POST['namalurah'];
$kec            = $_POST['kec'];
$kodepos        = $_POST['kodepos'];
$ttinggal       = $_POST['ttinggal'];
$transport      = $_POST['transport'];
$hp             = $_POST['hp'];
$telp           = $_POST['telp'];
$email          = $_POST['email'];
$kip            = $_POST['kip'];
$nokip          = $_POST['nokip'];
$warga          = $_POST['warga'];
$negara         = $_POST['negara'];

// query SQL untuk insert data
$query="INSERT INTO datapribadi SET namalengkap='$namalengkap',jk='$jk',nisn='$nisn',nik='$nik',tmptlahir='$tmptlahir',tgllahir='$tgllahir',agama='$agama',khusus='$khusus',alamat='$alamat',rt='$rt',rw='$rw',namadusun='$namadusun',namalurah='$namalurah',kec='$kec',kodepos='$kodepos',ttinggal='$ttinggal',transport='$transport',hp='$hp',telp='$telp',email='$email',kip='$kip',nokip='$nokip',warga='$warga',negara='$negara'";
mysqli_query($koneksiform, $query);
// mengalihkan ke halaman dataayahibu.php
header("location:dataayahibu.php");
?>